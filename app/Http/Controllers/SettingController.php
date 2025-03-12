<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Notification ;
use App\Notifications\SendNootification;
use App\Models\User ;

class SettingController extends Controller
{

    public function index()
    {
       return  view('setting.index');
    }
    public function userNotify(Request $request)
    {
        $email = $request->emailnaotify;
        $message = $request->message ;
        $user = User::where('email',$email)->first();
        $res = Notification::send($user, new InvoicePaid($message));
        $flag = 0;
        if($res)
        {$flag = 1 ; return $flag; }else{return $flag;}
    }
    public function sntusa(Request $request)
    {
        $email = $request->email;
        $msge = $request->message;
        $user = User::where('email',$email)->first();
        $result = User::find(auth()->user()->id)->notify(new SendNootification($user,$msge));
        $flag = 0 ;
        if($result)
        {$flag = 1 ; return $flag; }else{return $flag;}
    }
}
