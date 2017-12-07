<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Notifications\testNotify;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use OMGZui\OMGZui\Facades\OMGZui;

class TestController extends Controller
{

    public function demo()
    {
        return view('test',['name' => OMGZui::getName(), 'title' => '小蠢货']);
    }

    public function mail()
    {
        $to = '15679769443@163.com';
        Mail::to($to)
            ->send(new RegisterMail());
        return 'send ok';
    }

    public function notify()
    {
        $user = User::query()->find(1);

        $user->notify(new testNotify());

        return 'notify ok';
    }
}
