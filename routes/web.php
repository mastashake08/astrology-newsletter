<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (Request $request) {
    return view('dashboard')->with([
      'horoscopes' => \App\Models\Horoscope::where('zodiac_sign', Str::of($request->user()->zodiac_sign)->ucfirst())->get()->sortDesc()
    ]);
})->middleware(['auth'])->name('dashboard');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/horoscope/{horoscope}', [\App\Http\Controllers\HoroscopeController::class, 'show'])->middleware(['auth']);
Route::get('/horoscope/', [\App\Http\Controllers\HoroscopeController::class, 'index'])->name('horoscopes');
Route::get('/billing-portal', function (Request $request) {

    return $request->user()->redirectToBillingPortal(route('dashboard'));
})->middleware(['auth'])->name('billing');

Route::post('/user/subscribe', function (Request $request) {
    $request->user()->newSubscription(
        'default', 'price_1LR8giDVNWGpANFq7Qy9gBRU'
    )->create($request->user()->defaultPaymentMethod());

    // ...
});
require __DIR__.'/auth.php';
