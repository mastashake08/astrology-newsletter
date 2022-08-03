@component('mail::message')
# {{$user->zodiac_sign}} - {{$horoscope['data']['current_date']}}

{{$user->name}} your daily horoscope is ready!
<p class="horoscope-description">
{{$horoscope['data']['description']}}
</p>
<p class="horoscope-color">
Lucky color: {{$horoscope['data']['color']}}
</p>
<p class="horoscope-number">
Lucky number: {{$horoscope['data']['lucky_number']}}
</p>
<p class="horoscope-mood">
Mood: {{$horoscope['data']['mood']}}
</p>
<p class="horoscope-time">
Lucky Time: {{$horoscope['data']['lucky_time']}}
</p>
@component('mail::button', ['url' => url('/dashboard')])
Login to see more!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
