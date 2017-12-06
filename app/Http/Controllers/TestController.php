<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OMGZui\OMGZui\Facades\OMGZui;

class TestController extends Controller
{

    public function demo()
    {
        return view('test',['name' => OMGZui::getName(), 'title' => '小蠢货']);
    }
}
