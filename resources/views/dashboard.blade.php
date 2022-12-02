<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2>{{ Auth::user()->name }}</h2>
    </x-slot>

    <h2>this is dashboard</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, in!</p>
   
   
</x-app-layout>
