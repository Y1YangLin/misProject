<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Mail\ReminderMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SendMailController extends Controller
{
    public function sendMail(Request $request){
        
        $data = $request->all();

        $mailData = [
            'subject' => 'YOFU',
            'content' => '甘蝦哩欸回饋 我們收到你的真心話囉 !',
            'name' => $data['name']
        ];         

        
        $userModel = new User();
        $user = $userModel->findUser($data['email']);

        if($user){
            Mail::to($data['email'], $data['name'])->send(new ReminderMail($mailData));
        }else{
            return redirect()->route('index')->with('mail-msg', '你還不是會員喔 快去註冊ㄅ');
        }

        
        return redirect()->route('index')->with('mail-msg', '謝謝您的回饋 :)');
    }
}
