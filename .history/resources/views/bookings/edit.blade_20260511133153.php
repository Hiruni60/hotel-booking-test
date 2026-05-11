@extends('layouts.app')

@section('title', 'Edit Booking')

@section('content')

<form method="POST"
      action="{{ route('bookings.update', $booking->id) }}"
      class="bg-white p-5 rounded shadow">

@csrf
@method('PUT')

<input name="guest_name"
       value="{{ $booking->guest_name }}"
       class="w-full border p-2 mb-2">

<select name="room_id" class="w-full border p-2 mb-2">

@foreach($rooms as $room)
    <option value="{{ $room->id }}"
        @selected($booking->room_id == $room->id)>
        {{ $room->room_number }}
    </option>
@endforeach

</select>

<input type="date" name="check_in"
       value="{{ $booking->check_in }}"
       class="w-full border p-2 mb-2">

<input type="date" name="check_out"
       value="{{ $booking->check_out }}"
       class="w-full border p-2 mb-2">

<button class="bg-blue-500 text-white px-4 py-2">
    Update Booking
</button>

</form>

@endsection