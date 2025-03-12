<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendNootification extends Notification
{
    use Queueable;
    public $Nuser , $msg;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user , $msg)
    {
        $this->Nuser = $user ;
        $this->msg = $msg ;
        // dd($this->Nuser['id']);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }
    public function toArray($notifiable)
    {
        return [
            'user_id'=>$this->Nuser['id'],
            'name'=>$this->Nuser['name'],
            'email'=>$this->Nuser['email'],
            'msg'=>$this->msg,
        ];
    }
}
