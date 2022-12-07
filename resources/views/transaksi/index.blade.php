@extends('layouts.master')

@section('content')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('admin.transaksi.index')
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
