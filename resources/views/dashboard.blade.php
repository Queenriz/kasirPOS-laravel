@extends('layouts.master')

@section('content')
<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard {{ auth()->user()->currentTeam->name }}
        </h2> --}}

        {{-- <div class="py-12" name="header"> --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{-- <x-jet-welcome /> --}}
                    @livewire('product.index')
                </div>
            </div>
        {{-- </div> --}}
    </x-slot>
</x-app-layout>
@endsection
