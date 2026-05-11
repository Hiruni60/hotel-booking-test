@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="grid grid-cols-3 gap-4">

    <div class="bg-white p-5 rounded shadow">
        <h3 class="text-gray-500">Total Rooms</h3>
        <p class="text-2xl font-bold">0</p>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <h3 class="text-gray-500">Active Bookings</h3>
        <p class="text-2xl font-bold">0</p>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <h3 class="text-gray-500">Available Rooms</h3>
        <p class="text-2xl font-bold">0</p>
    </div>

</div>

@endsection
