<?php

namespace App\Http\Controllers;

use App\Http\Requests\PayPalRequest;
use App\Models\Plan as LocalPlan;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Exception;
use Illuminate\Http\Request;

// Used to process plans
use PayPal\Api\Agreement;
use PayPal\Api\ChargeModel;
use PayPal\Api\Currency;
use PayPal\Api\MerchantPreferences;
use PayPal\Api\Payer;
use PayPal\Api\PayerInfo;
use PayPal\Api\Payment;
use PayPal\Api\PaymentDefinition;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Plan;
use PayPal\Api\Patch;
use PayPal\Api\PatchRequest;
use PayPal\Api\ShippingAddress;
use PayPal\Common\PayPalModel;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use Session;

class PaypalController extends Controller
{
    private $apiContext;
    private $mode;
    private $client_id;
    private $secret;

    // Create a new instance with our paypal credentials
    public function __construct()
    {
        // Detect if we are running in live mode or sandbox
        if (config('paypal.settings.mode') == 'live') {
            $this->client_id = config('paypal.live_client_id');
            $this->secret = config('paypal.live_secret');
        } else {
            $this->client_id = config('paypal.sandbox_client_id');
            $this->secret = config('paypal.sandbox_secret');
        }

        // Set the Paypal API Context/Credentials
        $this->apiContext = new ApiContext(new OAuthTokenCredential($this->client_id, $this->secret));
        $this->apiContext->setConfig(config('paypal.settings'));
    }

    public function create_plan(PayPalRequest $request)
    {

        // Create a new billing plan
        $plan = new Plan();
        $plan->setName($request->name)
            ->setDescription($request->description)
            ->setType('infinite');

        // Set billing plan definitions
        $paymentDefinition = new PaymentDefinition();
        $paymentDefinition->setName($request->name)
            ->setType('REGULAR')
            ->setFrequency($request->duration_type)
            ->setFrequencyInterval($request->duration)
            ->setCycles('0')
            ->setAmount(new Currency(array('value' => $request->cost, 'currency' => 'EUR')));

        // Set merchant preferences
        $merchantPreferences = new MerchantPreferences();
        $merchantPreferences->setReturnUrl(route('paypal.return'))
            ->setCancelUrl(route('paypal.return'))
            ->setAutoBillAmount('yes')
            ->setInitialFailAmountAction('CONTINUE')
            ->setMaxFailAttempts('0');

        $plan->setPaymentDefinitions(array($paymentDefinition));
        $plan->setMerchantPreferences($merchantPreferences);

        //create the plan
        try {
            $createdPlan = $plan->create($this->apiContext);

            try {
                $patch = new Patch();
                $value = new PayPalModel('{"state":"ACTIVE"}');
                $patch->setOp('replace')
                    ->setPath('/')
                    ->setValue($value);
                $patchRequest = new PatchRequest();
                $patchRequest->addPatch($patch);
                $createdPlan->update($patchRequest, $this->apiContext);
                $plan = Plan::get($createdPlan->getId(), $this->apiContext);

                $local_plan = new LocalPlan();
                $local_plan->name = $request->name;
                $local_plan->slug = str_slug($request->name);
                $local_plan->cost = $request->cost;
                $local_plan->duration = $request->duration;
                $local_plan->duration_type = $request->duration_type;
                $local_plan->freight_listing = $request->freight_listing;
                $local_plan->truck_listing = $request->truck_listing;
                $local_plan->tender_listing = $request->tender_listing;
                $local_plan->ads = $request->ads;
                $local_plan->free_chat = $request->free_chat;
                $local_plan->route_planning = $request->route_planning;
                $local_plan->free_assistance = $request->free_assistance;
                $local_plan->description = $request->description;
                $local_plan->plan_id = $plan->getId();
                $local_plan->save();
                // Output plan id
                return redirect()->back()->with('success', 'Subscription plan created successfully');
            } catch (PayPal\Exception\PayPalConnectionException $ex) {
                echo "mini paypal catch" . PHP_EOL;
                echo $ex->getCode();
                echo $ex->getData();
                die($ex);
            } catch (Exception $ex) {
                echo "mini catch" . PHP_EOL;
                echo $ex->getCode();
                echo $ex->getData();
                die($ex);
            }
        } catch (PayPal\Exception\PayPalConnectionException $ex) {
            echo "Last paypal catch" . PHP_EOL;
            echo $ex->getCode();
            echo $ex->getData();
            die($ex);
        } catch (Exception $ex) {
            echo "Last catch" . PHP_EOL;echo $ex->getCode();
            echo $ex->getData();
            die($ex);
        }

    }

    public function paypalRedirect(Request $request)
    {
        // Create new agreement
        $localPlan = LocalPlan::where('plan_id', $request->plan_id)->first();
        $agreement = new Agreement();
        $agreement->setName($localPlan->name .  ' Subscription Agreement')
            ->setDescription($localPlan->description)
            ->setStartDate(\Carbon\Carbon::now()->addMonth()->toIso8601String());

        // Set plan id
        $plan = new Plan();
        $plan->setId($request->plan_id);
        $agreement->setPlan($plan);
        // Add payer type
        $user = Sentinel::getUser();
        $data = explode(' ', $user->full_name);
        $payerInfo = new PayerInfo();
        $payerInfo->setFirstName($data[0]);
        $payerInfo->setLastName($data[1]);
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $payer->setPayerInfo($payerInfo);
        $agreement->setPayer($payer);
        $req = clone $agreement;
        try {

            // Create agreement
            $agreement = $agreement->create($this->apiContext);
            // Extract approval URL to redirect user
            $approvalUrl = $agreement->getApprovalLink();
            return redirect($approvalUrl);
        } catch (PayPal\Exception\PayPalConnectionException $ex) {
            echo "Last paypal pay catch" . PHP_EOL;
            echo $ex->getCode();
            echo $ex->getData();
            die($ex);
        } catch (Exception $ex)
        {echo "Last pay catch" . PHP_EOL;
            echo $ex->getCode();
            echo $ex->getData();
            die($ex);
        }

    }

    public function paypalReturn(Request $request)
    {
        $token = $request->token;
        $agreement = new \PayPal\Api\Agreement();

        try {
            // Execute agreement
            $result = $agreement->execute($token, $this->apiContext);
            $user = Sentinel::getUser();
            if (isset($result->id)) {
                $user->paypal_agreement_id = $result->id;
            }
            $user->save();
            return redirect()->back()->with('success', 'Subscription completed successfully');

        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            echo 'You have either cancelled the request or your session has expired';
        }
    }

//    public function postPayment(Request $request, $slug)
//    {
//        $payer = new Payer();
//        $payer->setPaymentMethod('paypal');
//        $plan = \App\Models\Plan::where('slug', $slug)->first();
//        $item = new Item();
////
//        $item->setName($plan->name)// item name
//        ->setCurrency('EUR')
//            ->setQuantity(1)
//            ->setPrice($plan->cost); // unit price
////
//        // add item to list
//        $item_list = new ItemList();
//        $item_list->setItems(array($item));
////
//        $amount = new Amount();
//        $amount->setCurrency('EUR')
//            ->setTotal($plan->cost);
////
//        $transaction = new Transaction();
//        $transaction->setAmount($amount)
//            ->setItemList($item_list)
//            ->setDescription('Subscription payment');
////
//        $redirect_urls = new RedirectUrls();
//        $redirect_urls->setReturnUrl(url('payment/status'))
//            ->setCancelUrl(url('payment/status'));
////
//        $payment = new Payment();
//        $payment->setIntent('Sale')
//            ->setPayer($payer)
//            ->setRedirectUrls($redirect_urls)
//            ->setTransactions(array($transaction));
////
//        try {
//            $payment->create($this->_api_context);
//        } catch (\PayPal\Exception\PPConnectionException $ex) {
//            if (\config('app.debug')) {
//                echo "Exception: " . $ex->getMessage() . PHP_EOL;
//                $err_data = json_decode($ex->getData(), true);
//                exit;
//            } else {
//                //Flash::error('Something went wrong, Sorry for inconvenience');
//                return redirect('/');
//            }
//        }
////
//        foreach ($payment->getLinks() as $link) {
//            if ($link->getRel() == 'approval_url') {
//                $redirect_url = $link->getHref();
//                break;
//            }
//        }
////
//        // add payment ID to session
//        Session::put('paypal_payment_id', $payment->getId());
////
//        if (isset($redirect_url)) {
//            // redirect to paypal
//            return redirect($redirect_url);
//        }
//        //Flash::error('Unknown error occurred');
//        return redirect('/');
//    }
//
//    public function getPaymentStatus(Request $request)
//    {
//        // Get the payment ID before session clear
//        $payment_id = Session::get('paypal_payment_id');
//        // clear the session payment ID
//        Session::forget('paypal_payment_id');
//        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
//            //Flash::error('Payment Failed');
//            return redirect('/');
//        }
//        $payment = Payment::get($payment_id, $this->_api_context);
//        // PaymentExecution object includes information necessary
//        // to execute a PayPal account payment.
//        // The payer_id is added to the request query parameters
//        // when the user is redirected from paypal back to your site
//        $execution = new PaymentExecution();
//        $execution->setPayerId($request->input('PayerID'));
//        //Execute the payment
//        $result = $payment->execute($execution, $this->_api_context);
//        //echo '<pre>';print_r($result->payer->payer_info->shipping_address);echo '</pre>';exit; // DEBUG RESULT.
//        $tripper = Sentinel::getUser();
//
//        if ($result->getState() == 'approved') {
//            dd("approved");
////            Mail::queue("emails.it.reservation_tripper", compact('tripper','leader','tour','tour_event'), function ($m) use ($tripper) {
////                $m->to($tripper->email)->subject(trans('subject.acquisto'));
////            });
////            $admins = User::whereHas('roles', function ($q) {
////                $q->where('slug', 'Admin');
////            })->get();
////            foreach ($admins as $admin){
////                Mail::queue("emails.it.reservation_admin", compact('tripper','leader','tour','tour_event', 'payment'), function ($m) use ($admin) {
////                    $m->to($admin->email)->subject(trans('subject.acquisto'));
////                });
////            }
//
////            return redirect()->action('TourController@show', $tour->tour_id)->withCookie(Cookie::forget('booked-event'))->with('success',trans('notification.reservation_success'));
//        }
//        dd($result->getState());
////        return redirect()->action('TourController@show', $tour->tour_id)->withCookie(Cookie::forget('booked-event'))->with('error',trans('notification.reservation_fail'));
//    }
}
