<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pricing') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  Subscribe to {{env('APP_NAME')}} for $10/year! For less than $1 per month
                  you can get personalized horoscopes in your email inbox and/or a daily text message!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
