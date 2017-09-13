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
                if ($message->message_state->state == 0) {
                    $state = MessageState::where('message_id', $message->id)->where('user_id', $user->id)->first();
                    $state->state = 1;
                    $state->save();
                }
            }
        }
        return view('admin.inbox.show', compact('result', 'buddy_id'));
    }

}
