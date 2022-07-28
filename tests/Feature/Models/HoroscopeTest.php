<?php

namespace Tests\Feature\Models;
use Illuminate\Testing\Fluent\AssertableJson;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

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
        return $response;
    }

    public function test_user_notifications() {
      $users =  \App\Models\User::factory()->count(100)->create();
      // $response = $this->test_store_method();
      // $this->assertDatabaseHas('users', [
      //     'zodiac_sign' => $response['data']['zodiac_sign'],
      // ]);
    }
}
