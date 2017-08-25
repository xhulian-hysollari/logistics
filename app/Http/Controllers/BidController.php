<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\BidFile;
use App\Models\Freight;
use App\Models\Truck;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BidController extends Controller
{
    public function index()
    {
        $bids = Bid::where('user_id', Sentinel::getUser()->id)->get();
        return view('client.bid.index', compact('bids'));
    }

    public function offers()
    {
        $offers = Bid::where('owner_id', Sentinel::getUser()->id)->get();
        return view('client.pages.listings', compact('offers'));
    }

    public function bidTruck($id)
    {
        try {
            $user = Sentinel::getUser();
            $files = Input::file('images[]');
            $truck = Truck::where('id', $id)->first();
            $bid = new Bid();
            $bid->user_id = $user->id;
            $bid->owner_id = $truck->user_id;
            $bid->truck_id = $id;
            $bid->description = Input::get('description');
            $bid->save();
            foreach ($files as $file){
                $this->saveFiles($file, $bid, $user);
            }
            return redirect()->back()->with('success', 'bid.success');
        } catch (\Exception $ex) {
            return redirect()->back()->withInput()->with('error', 'bid.error');
        }
    }

    public function bidFreight($id)
    {
        try {
            $user = Sentinel::getUser();
            $files = Input::file('images');
            $truck = Freight::where('id', $id)->first();
            $bid = new Bid();
            $bid->user_id = $user->id;
            $bid->owner_id = $truck->user_id;
            $bid->freight_id = $id;
            $bid->description = Input::get('description');
            $bid->save();
            foreach ($files as $file){
                $this->saveFiles($file, $bid, $user);
            }
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
            $files = Input::file('images');
            $truck = Freight::where('id', $id)->first();
            $bid = new Bid();
            $bid->user_id = $user->id;
            $bid->owner_id = $truck->user_id;
            $bid->freight_id = $id;
            $bid->description = Input::get('description');
            $bid->save();
            foreach ($files as $file){
                $this->saveFiles($file, $bid, $user);
            }
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
}
