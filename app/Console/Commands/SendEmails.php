<?php

namespace App\Console\Commands;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use App\Models\Horoscope;
use App\Models\User;

use App\Notifications\HoroscopesCreated;
class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'horoscopes:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send horoscope emails.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $users = User::all();
        $users->each(function ($user) {

          $horoscope = Horoscope::where('zodiac_sign', Str::of($user->zodiac_sign)->ucfirst())->get()->sortDesc()->first();
          $user->notify(new HoroscopesCreated($horoscope));
        });
        $this->info('Emails sent!');
        return 0;
    }
}
