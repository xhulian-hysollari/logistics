<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\BidFile;
use App\Models\Conversation;
use App\Models\Freight;
use App\Models\Truck;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BidController extends Controller
{
    public function index()
    {
        $bids = Bid::where('user_id', Sentinel::getUser()->id)->get();
        return view('admin.bids.index', compact('bids'));
    }

    public function offers()
    {
        $offers = Bid::where('owner_id', Sentinel::getUser()->id)->get();
        return view('admin.bids.offers', compact('offers'));
    }

    public function details($id)
    {
        $bid = Bid::where('id', $id)->first();
        $user = Sentinel::getUser();
        if( $user->id == $bid->owner_id){
            $details = User::where('id', $bid->user_id)->first();
        }else{
            $details = User::where('id', $bid->owner_id)->first();
        }
        return view('admin.bids.details', compact('bid','details'));
    }

    public function bidTruck($id)
    {
        try {
            $user = Sentinel::getUser();
            $files = Input::file('files');
            $truck = Truck::where('id', $id)->first();
            $bid = new Bid();
            $bid->user_id = $user->id;
            $bid->owner_id = $truck->user_id;
            $bid->truck_id = $id;
            $bid->description = Input::get('description');
            $bid->save();
            if(Input::hasFile('files')){
                foreach ($files as $file){
                    $this->saveFiles($file, $bid, $user);
                }
            }
            $this->notifyForBid($truck->user_id, $bid->description);
            return redirect()->back()->with('success', 'bid.success');
        } catch (\Exception $ex) {
            return redirect()->back()->withInput()->with('error', 'bid.error');
        }
    }

    public function bidFreight($id)
    {
        try {
            $user = Sentinel::getUser();
            $files = Input::file('files');
            $truck = Freight::where('id', $id)->first();
            $bid = new Bid();
            $bid->user_id = $user->id;
            $bid->owner_id = $truck->user_id;
            $bid->freight_id = $id;
            $bid->description = Input::get('description');
            $bid->save();
            if(Input::hasFile('files')){
                foreach ($files as $file){
                    $this->saveFiles($file, $bid, $user);
                }
            }
            $this->notifyForBid($truck->user_id, $bid->description);
            return redirect()->back()->with('success', 'bid.success');
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->withInput()->with('error', 'bid.error');
        }
    }

    public function bidContract($id)
    {
        try {
            $user = Sentinel::getUser();
            $files = Input::file('files');
            $truck = Freight::where('id', $id)->first();
            $bid = new Bid();
            $bid->user_id = $user->id;
            $bid->owner_id = $truck->user_id;
            $bid->freight_id = $id;
            $bid->description = Input::get('description');
            $bid->save();
            if(Input::hasFile('files')){
                foreach ($files as $file){
                    $this->saveFiles($file, $bid, $user);
                }
            }
            $this->notifyForBid($truck->user_id, $bid->description, "A bid has just been placed:");
            return redirect()->back()->with('success', 'bid.success');
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->withInput()->with('error', 'bid.error');
        }
    }

    /**
     * @param $file
     * @param $bid
     * @param $user
     */
    private function saveFiles($file, $bid, $user)
    {
        $filename = $file->store('bids');
        $image = new BidFile();
        $image->bid_id = $bid->id;
        $image->user_id = $user->id;
        $image->path = $filename;
        $image->name = $filename;
        $image->save();
    }

    private function notifyForBid($receiver_id, $message, $type = null){
        $data = Input::all();
        $user = Sentinel::getUser();
        $text = "$type <br> <blockquote> $message </blockquote>";
        $conversation = Conversation::startConversation($user->id, $receiver_id);
        $result = $conversation->addMessage($text, $receiver_id);
        if ($result) {
            return true;
        }
        return false;

    }

    public function refuse($id){
        $bid = Bid::where('id', $id)->first();
        $bid->status = 2;
        $bid->save();
        $receiver = User::where('id', $bid->user_id)->first();
        $conversation = Conversation::startConversation(Sentinel::getUser()->id, $receiver->id);
        $result = $conversation->addMessage("Your bid has been declined.", $receiver->id);
        return redirect()->back()->with('success','The bid has been declined successfully.');
    }

    public function accept($id){
        $bid = Bid::where('id', $id)->first();
        $bid->status = 2;
        $bid->save();
        $receiver = User::where('id', $bid->user_id)->first();
        $conversation = Conversation::startConversation(Sentinel::getUser()->id, $receiver->id);
        $result = $conversation->addMessage("Your bid has been accepted.", $receiver->id);
        return redirect()->back()->with('success','The bid has been accepted successfully.');
    }
}
