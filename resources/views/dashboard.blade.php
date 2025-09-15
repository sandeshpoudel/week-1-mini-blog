<x-app-layout>
    <h1>test</h1>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


                <div>
                    <p>Welcome... {{ auth()->user()->name }}</p>
                    
                    @include('layouts.dashbutton')

                   
                </div>
            </div>
        </div>
    </div>
    </x-slot>

    
</x-app-layout>