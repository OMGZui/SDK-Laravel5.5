<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use OMGZui\OMGZui\Facades\OMGZui;

class TestController extends Controller
{

    public function demo()
    {
        return view('test',['name' => OMGZui::getName(), 'title' => '小蠢货']);
    }

    public function send()
    {
        Mail::to('15679769443@163.com')->send(new RegisterMail());
        return 'send ok';
    }
}
