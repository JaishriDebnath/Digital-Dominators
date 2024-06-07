<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmpwfhNotifications extends Notification
{
    use Queueable;
    public $wfhleave;

    /**
     * Create a new notification instance.
     */
    public function __construct($wfhleave)
    {
        $this->wfhleave = $wfhleave;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    
    public function toArray(object $notifiable): array
    {
        return [
            'id'=>$this->wfhleave['id'],
            'wname'=>$this->wfhleave['wname'],
        ];
    }
}
