@extends('layouts.app')

@section('title', 'Edit Booking')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">

    <h2 class="text-xl font-bold mb-6">Edit Booking</h2>
        <a href="{{ route('rooms.index') }}"
            class="bg-gray-500 text-white  px-4 py-2 rounded">
                ← Back
            </a>

    <form method="POST"
          action="{{ route('bookings.update', $booking->id) }}">
        @csrf
        @method('PUT')

        {{-- ROOM SELECT --}}
        <label class="block mb-1">Select Room</label>
        <select name="room_id" class="w-full border p-2 mb-3 rounded">
            <option value="">-- Choose Room --</option>

            @foreach($rooms as $room)
                <option value="{{ $room->id }}"
                    @selected($booking->room_id == $room->id)>
                    {{ $room->room_number }} ({{ $room->room_type }})
                </option>
            @endforeach
        </select>

        {{-- GUEST NAME --}}
        <label class="block mb-1">Guest Name</label>
        <input type="text" name="guest_name"
               value="{{ $booking->guest->name }}"
               class="w-full border p-2 mb-3 rounded">

        {{-- GUEST EMAIL --}}
        <label class="block mb-1">Guest Email</label>
        <input type="email" name="guest_email"
               value="{{ $booking->guest->email }}"
               class="w-full border p-2 mb-3 rounded">

        {{-- GUEST PHONE --}}
        <label class="block mb-1">Guest Phone</label>
        <input type="text" name="guest_phone"
               value="{{ $booking->guest->phone }}"
               class="w-full border p-2 mb-3 rounded">

        <div class="grid grid-cols-2 gap-3">

            {{-- CHECK IN --}}
            <div>
                <label class="block mb-1">Check In</label>
                <input type="date" name="check_in"
                       value="{{ $booking->check_in }}"
                       class="w-full border p-2 mb-3 rounded">
            </div>

            {{-- CHECK OUT --}}
            <div>
                <label class="block mb-1">Check Out</label>
                <input type="date" name="check_out"
                       value="{{ $booking->check_out }}"
                       class="w-full border p-2 mb-3 rounded">
            </div>

        </div>

        {{-- STATUS (OPTIONAL - GOOD FOR ASSESSMENT) --}}
        <label class="block mb-1">Status</label>
        <select name="status" class="w-full border p-2 mb-3 rounded">
            <option value="confirmed" @selected($booking->status == 'confirmed')>Confirmed</option>
            <option value="cancelled" @selected($booking->status == 'cancelled')>Cancelled</option>
            <option value="completed" @selected($booking->status == 'completed')>Completed</option>
        </select>

        {{-- SUBMIT --}}
        <button class="bg-blue-500 text-white px-4 py-2 rounded w-full">
            Update Booking
        </button>

    </form>

</div>

@endsection