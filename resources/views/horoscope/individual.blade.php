<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Horoscope
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <article class="horoscope-description">
                    {{$horoscope->data['description']}}
                  </article>
                  <h2 class='h2' for="horoscope-number"> Lucky Number </h2>
                  <p id="horoscope-number">
                    {{$horoscope->data['lucky_number']}}
                  </p>
                  <x-label for="horoscope-color-svg" value="Lucky Color" />

                  <svg id="horoscope-color-svg">
                    <rect x="0" y="0" id="horoscope-color"/>
                  </svg>
                  <x-label for="horoscope-mood" value="Mood" />
                  <p id="horoscope-mood">
                    {{$horoscope->data['mood']}}
                  </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
#horoscope-color {
   width: 50px;
   height: 50px;
   fill: {{Str::of($horoscope->data['color'])->lcfirst()}};
   position: relative;
   animation: luckycolor 5s ease infinite;
 }
</style>
