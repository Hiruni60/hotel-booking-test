@extends('layouts.app')

@section('title', 'Create Booking')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">

    <h2 class="text-xl font-bold mb-4">Create New Booking</h2>

    <a href="{{ route('bookings.index') }}"
            class="bg-gray-500 text-white  px-4 py-2 rounded">
                ← Back
        </a>

    {{-- SUCCESS / ERROR --}}
    @if(session('error'))
        <div class="bg-red-100 text-red-600 p-2 mb-3 rounded">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('bookings.store') }}">
        @csrf

        {{-- ROOM SELECT --}}
        <label class="block mb-1 mt-5">Select Room</label>
        <select name="room_id" class="w-full border p-2 mb-3 rounded">
            <option value="">-- Choose Room --</option>
            @foreach($rooms as $room)
                <option value="{{ $room->id }}">
                    {{ $room->room_number }} ({{ $room->room_type }})
                </option>
            @endforeach
        </select>

        {{-- GUEST NAME --}}
        <label class="block mb-1">Guest Name</label>
        <input type="text" name="guest_name"
               class="w-full border p-2 mb-3 rounded"
               placeholder="John Doe">

        {{-- GUEST EMAIL --}}
        <label class="block mb-1">Guest Email (optional)</label>
        <input type="email" name="guest_email"
               class="w-full border p-2 mb-3 rounded"
               placeholder="john@example.com">

        {{-- GUEST PHONE --}}
        <label class="block mb-1">Guest Phone</label>
        <input type="text" name="guest_phone"
               class="w-full border p-2 mb-3 rounded"
               placeholder="+94 77xxxxxxx">

        <div class="grid grid-cols-2 gap-3">

            {{-- CHECK IN --}}
            <div>
                <label class="block mb-1">Check In</label>
                <input type="date" name="check_in"
                       class="w-full border p-2 mb-3 rounded">
            </div>

            {{-- CHECK OUT --}}
            <div>
                <label class="block mb-1">Check Out</label>
                <input type="date" name="check_out"
                       class="w-full border p-2 mb-3 rounded">
            </div>

        </div>

        {{-- SUBMIT --}}
        <button class="bg-green-500 text-white px-4 py-2 rounded w-full">
            Create Booking
        </button>

    </form>

</div>

@endsection