<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MessageController extends Controller
{
    public function index(){
        $user = Sentinel::getUser();
        $conversations = $user->conversations;
        return view('admin.inbox.index', compact('conversations'));
    }

    public function send($conversation_id){
        $sender = Sentinel::getUser();
        $to = [];
        $message = Input::get('message');
        Message::sendMessage($sender->id, $to, $message, $conversation_id);
    }
}
