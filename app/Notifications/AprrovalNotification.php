<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AprrovalNotification extends Notification
{
    use Queueable;
    public $empleave;
    public function __construct($empleave)
    {
        $this->empleave = $empleave;
    }

   
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'id'=>$this->empleave['id'],
            'emp_id'=>$this->empleave['emp_id'],
            'name'=>$this->empleave['name'],
        ];
    }
}
