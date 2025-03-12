<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Notification ;
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
        $users = 'khalidu825@gmail.com';
        // dd($request->input());
        $user = User::where('email',$email)->first();
        Notification::send($user, new InvoicePaid($message));
        // dd('ok');
        $flag = 0;
        if(1)
        {$flag = 1 ; return $flag; }else{return $flag;}
    }
}
