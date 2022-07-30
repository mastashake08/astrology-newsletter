<?php

namespace Tests\Feature\Models;
use Illuminate\Testing\Fluent\AssertableJson;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Notifications\HoroscopesCreated;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Notification;

class HoroscopeTest extends TestCase
{
  use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store_method()
    {
        $response = $this->post('/api/get-horoscope', [
          'sign' => fake()->randomElement(['aries', 'taurus', 'gemini', 'cancer', 'leo', 'virgo', 'libra', 'scorpio', 'sagittarius', 'capricorn', 'aquarius', 'pisces'])
        ]);
        $response->assertJson(fn (AssertableJson $json) =>
          $json->has('id')
            ->has('created_at')
            ->has('updated_at')
            ->has('data')
            ->has('zodiac_sign')
        );
        $response->assertSuccessful();
    }

    public function test_user_notifications() {
      $user =  \App\Models\User::factory()->create();
      $response = $this->post('/api/get-horoscope', [
        'sign' => $user->zodiac_sign
      ]);
      $response->assertJson(fn (AssertableJson $json) =>
        $json->has('id')
          ->has('created_at')
          ->has('updated_at')
          ->has('data')
          ->has('zodiac_sign')
      );
      Notification::fake();

        // Perform order shipping...

        // Assert that no notifications were sent...
        Notification::assertNothingSent();
        $user->notify(new HoroscopesCreated($response));
        // Assert a notification was sent to the given users...
        Notification::assertSentTo(
            [$user], HoroscopesCreated::class
        );
    }
}
