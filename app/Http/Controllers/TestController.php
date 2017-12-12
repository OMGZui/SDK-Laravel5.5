<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Notifications\testNotify;
use App\Models\User;

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

        $user->notify(new testNotify($user));

        return 'notify ok';
    }

    public function notifyDb()
    {
        $user = User::query()->find(1);

        $user->notify(new testNotify($user));

        //通知的时候自己会创建数据库
//        $data = [
//            'id' => str_random(36),
//            'type' => testNotify::class,
//            'notifiable_id' => $user->id,
//            'notifiable_type' => User::class,
//            'data' => (new testNotify())->toDatabase()
//        ];
//        DatabaseNotification::query()->create($data);

        $notifications = $user->notifications;

        return response()->json($notifications);
    }
}
