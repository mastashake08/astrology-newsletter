<?php

namespace App\Listeners;

use App\Events\HoroscopesCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HoroscopesCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\HoroscopesCreatedEvent  $event
     * @return void
     */
    public function handle(HoroscopesCreatedEvent $event)
    {
        //
    }
}
