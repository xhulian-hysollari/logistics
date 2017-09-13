<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\MessageState;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MessageController extends Controller
{
    public function index()
    {
        $user = Sentinel::getUser();
        $conversations = $user->conversations;
        return view('admin.inbox.index', compact('conversations'));
    }

    public function send($conversation_id)
    {
        $sender = Sentinel::getUser();
        $to = [];
        $message = Input::get('message');
        Message::sendMessage($sender->id, $to, $message, $conversation_id);
    }

    public function getConversation($buddy_id)
    {
        $user = Sentinel::getUser();
        $result = Conversation::startConversation($user->id, $buddy_id);
        if ($result) {
            foreach ($result->messages as $message) {
                if ($message->message_state->status == 0) {
                    $state = MessageState::where('message_id', $message->id)->where('user_id', $user->id)->first();
                    $state->status = 1;
                    $state->save();
                }
            }
        }
        return view('admin.inbox.show', compact('result', 'buddy_id'));
    }

    public function store($id = null, $receiver_id){
        $data = Input::all();
            $user = Sentinel::getUser();
            if ($id != null){
                if(!$conversation = Conversation::where('id', $id)->first()){
                    $conversation = Conversation::startConversation($user->id, $receiver_id);
                }
            }else{
                $conversation = Conversation::startConversation($user->id, $receiver_id);
            }
            $result = $conversation->addMessage($data['message'], $receiver_id);
            if ($result) {
                return redirect()->back();
            }
            $message = array('message' => 'Error. Please try again','status' => 'error');
            return redirect()->back();

    }

}
