<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmployeeNotifications extends Notification
{
    use Queueable;
    public $empleave;

    /**
     * Create a new notification instance.
     */
    public function __construct($empleave)
    {
        $this->empleave = $empleave;
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
            'id'=>$this->empleave['id'],
            'emp_id'=>$this->empleave['emp_id'],
            'name'=>$this->empleave['name'],
        ];
    }
}
