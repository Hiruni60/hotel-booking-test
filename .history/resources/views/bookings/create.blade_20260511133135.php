@extends('layouts.app')

@section('title', 'Create Booking')

@section('content')

<form method="POST" action="{{ route('bookings.store') }}"
      class="bg-white p-5 rounded shadow">

@csrf

<input name="guest_name" placeholder="Guest Name"
       class="w-full border p-2 mb-2">

<select name="room_id" class="w-full border p-2 mb-2">
    <option value="">Select Room</option>

    @foreach($rooms as $room)
        <option value="{{ $room->id }}">
            {{ $room->room_number }}
        </option>
    @endforeach
</select>

<input type="date" name="check_in"
       class="w-full border p-2 mb-2">

<input type="date" name="check_out"
       class="w-full border p-2 mb-2">

<button class="bg-green-500 text-white px-4 py-2">
    Book Room
</button>

</form>

@endsection