<?php

namespace App\Controllers;

use Trigold\GptChat\GPTChat;

class ChatController
{
    public function index()
    {

        $msg = request()->input('msg', '');
        if (!$msg){
            return  '';
        }
        $token = '';
        $chat = new GPTChat($token);
        $chat->authenticate()->send_message($msg);
    }
}
