<?php

namespace App\Http\Controllers;

use App\Models\Horoscope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HoroscopeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $horoscopes = Horoscope::orderByDesc('created_at')->Paginate(12);
        seo()
          ->title("Horoscopes")
          ->description("See current daily horoscopes")
          ->withUrl()
          ->twitter();
        return view('horoscope.all')->with(['horoscopes' => $horoscopes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $url = "https://aztro.sameerkumar.website/?sign={$request->sign}&day=today";
        $response = Http::post($url);
        $data = $response->json();
        $horoscope = Horoscope::create(['data' => collect($data), 'zodiac_sign' => $request->sign]);
        return $horoscope;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horoscope  $horoscope
     * @return \Illuminate\Http\Response
     */
    public function show(Horoscope $horoscope)
    {
        //
        seo()
          ->title("{$horoscope->zodiac_sign} Horoscope - {$horoscope->data['current_date']}")
          ->description($horoscope->data['description'])
          ->withUrl()
          ->twitter();
        return view('horoscope.individual')->with(['horoscope' => $horoscope]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horoscope  $horoscope
     * @return \Illuminate\Http\Response
     */
    public function edit(Horoscope $horoscope)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horoscope  $horoscope
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horoscope $horoscope)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horoscope  $horoscope
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horoscope $horoscope)
    {
        //
    }
}
