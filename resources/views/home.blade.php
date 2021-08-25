<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold h4 text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
{!! $chart->container() !!}
                                                    
 {!! $chart->script() !!}
    <x-jet-welcome />
</x-app-layout>