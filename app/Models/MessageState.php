<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageState extends Model
{
    public static $states = array(
        0 => 'unread',
        1 => 'read',
        2 => 'own',
        3 => 'deleted'
    );

    public static function indexOf($key){
        $states = static::$states;

        $indexResult = array_search($key, $states);

        if($indexResult === FALSE)
            throw new \Exception('Message state ' . $key . ' is unknown.');
        else
            return $indexResult;
    }

    protected $table = 'message_states';

    public function message()
    {
        return $this->belongsTo(Message::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
