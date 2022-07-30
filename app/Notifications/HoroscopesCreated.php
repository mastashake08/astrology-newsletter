<?php

namespace App\Notifications;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Twilio\TwilioChannel;
use NotificationChannels\Twilio\TwilioSmsMessage;
class HoroscopesCreated extends Notification
{
    use Queueable;
    public $horoscope;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(\App\Models\Horoscope $h)
    {
        //
        $this->horoscope = $h;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
      return ['mail', TwilioChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
      $data = [
        'user' => $notifiable,
        'horoscope' => $this->horoscope
      ];
      $sign = Str::of($notifiable->zodiac_sign)->ucfirst();
      return (new MailMessage)
      ->subject("Your {$sign} Horoscope For {$this->horoscope['data']['current_date']}")->markdown('mail.horoscope-created',$data);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    public function toTwilio($notifiable)
    {
        $sign = Str::of($notifiable->zodiac_sign)->ucfirst();
        $string = "Your {$sign} Horoscope For {$this->horoscope['data']['current_date']} \n
        {$this->horoscope['data']['description']} \n";
        return (new TwilioSmsMessage())
            ->content($string);
    }
}
