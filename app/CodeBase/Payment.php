<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/16/2017
 * Time: 4:28 PM
 */

namespace App\CodeBase;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

class Payment
{
    public function pay()
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $subscription = new Item();
        $subscription->setName('Item 1')
            ->setCurrency('AUD')
            ->setQuantity(1)
            ->setPrice('150');
        $item_list = new ItemList();
        $item_list->setItems(array($subscription));
        $amount = new Amount();
        $amount->setCurrency('AUD')
            ->setTotal(170);
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('description');
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('payment.status'))// Specify return URL
        ->setCancelUrl(route('payment.status'));
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Some error occur, sorry for inconvenient');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {
            return redirect($redirect_url);
        }
        return redirect()->route('home')
            ->with('error', 'Unknown error occurred');
    }
}