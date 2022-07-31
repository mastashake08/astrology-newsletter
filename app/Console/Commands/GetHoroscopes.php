<?php

namespace App\Console\Commands;
use App\Models\Horoscope;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
class GetHoroscopes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'horoscopes:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get daily horoscopes';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      foreach(Horoscope::SIGNS as $sign) {
        $url = "https://aztro.sameerkumar.website/?sign={$sign}&day=today";
        $response = Http::post($url);
        $data = $response->json();
        $horoscope = Horoscope::create(['data' => collect($data), 'zodiac_sign' => $sign]);
        $this->info('Horoscope created');
      }
        return 0;
    }
}
