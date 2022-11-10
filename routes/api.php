<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HoroscopeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/get-horoscope', [HoroscopeController::class, 'store']);


Route::get('/get-time-config', function(Request $request) {
  $times = [
    [
        "id" => 1,
        "title" => "1:11",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 1,
        "minute" => 11,
    ],
    [
        "id" => 2,
        "title" => "2:22",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 2,
        "minute" => 2,
    ],
    [
        "id" => 3,
        "title" => "3:33",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 3,
        "minute" => 3,
    ],
    [
        "id" => 4,
        "title" => "4:44",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 4,
        "minute" => 44,
    ],
    [
        "id" => 5,
        "title" => "5:55",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 5,
        "minute" => 55,
    ],
    [
        "id" => 6,
        "title" => "6:06",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 6,
        "minute" => 6,
    ],
    [
        "id" => 7,
        "title" => "7:07",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 7,
        "minute" => 7,
    ],
    [
        "id" => 8,
        "title" => "8:08",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 8,
        "minute" => 8,
    ],
    [
        "id" => 9,
        "title" => "9:09",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 9,
        "minute" => 9,
    ],
    [
        "id" => 10,
        "title" => "10:10",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 10,
        "minute" => 10,
    ],
    [
        "id" => 11,
        "title" => "11:11",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 11,
        "minute" => 11,
    ],
    [
        "id" => 12,
        "title" => "12:12",
        "body" => "Recurs every minute until cancelled",
        "ticker" => "The ticker",
        "badge" => 1,
        "ongoing" => true,
        "icon" => "res://heart",
        "thumbnail" => true,
        "interval" => "day",
        "channel" => "Sacred Times",
        "hour" => 12,
        "minute" => 12,
    ],];
  return response()->json($times);
});
