@extends('layouts.master')

@section('content')
<x-app-layout>
    <x-slot name="header">
                <div >
                    {{-- <x-jet-welcome /> --}}
                    @livewire('kasir.index')
                </div>
    </x-slot>
</x-app-layout>
@endsection
