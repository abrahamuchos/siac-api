<?php

namespace App\Notifications;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    private string $_url;

    /**
     * @param string $url
     *
     * @return void
     */
    public function __construct(string $url)
    {
        $this->_url = $url;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param User $notifiable
     *
     * @return MailMessage
     */
    public function toMail(User $notifiable): MailMessage
    {
        $data = [
            'name' => $notifiable->gradeType()->first()->value.' '.$notifiable->first_name . ' ' . $notifiable->first_surname,
            'link' => $this->_url.'&email='.urlencode($notifiable->email),
            'year' => Carbon::now()->year,
            'appName' => env('APP_NAME')
        ];
        return (new MailMessage)
            ->view('emails.resetPassword', $data);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
