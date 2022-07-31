<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/horoscope/{horoscope}', [\App\Http\Controllers\HoroscopeController::class, 'show'])->middleware(['auth']);
Route::get('/billing-portal/{user}', function (\App\Models\User $user) {

    return $user->redirectToBillingPortal(route('dashboard'));
});

Route::post('/user/subscribe', function (Request $request) {
    $request->user()->newSubscription(
        'default', 'price_1LR8giDVNWGpANFq7Qy9gBRU'
    )->create($request->user()->defaultPaymentMethod());

    // ...
});
require __DIR__.'/auth.php';
