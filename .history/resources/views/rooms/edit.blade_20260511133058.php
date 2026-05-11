@extends('layouts.app')

@section('title', 'Edit Room')

@section('content')

<form method="POST"
      action="{{ route('rooms.update', $room->id) }}"
      class="bg-white p-5 rounded shadow">

@csrf
@method('PUT')

<input name="room_number" value="{{ $room->room_number }}"
       class="w-full border p-2 mb-2">

<input name="room_type" value="{{ $room->room_type }}"
       class="w-full border p-2 mb-2">

<input name="floor" value="{{ $room->floor }}"
       class="w-full border p-2 mb-2">

<input name="capacity" value="{{ $room->capacity }}"
       class="w-full border p-2 mb-2">

<input name="price_per_night" value="{{ $room->price_per_night }}"
       class="w-full border p-2 mb-2">

<select name="status" class="w-full border p-2 mb-2">
    <option value="available" @selected($room->status=='available')>Available</option>
    <option value="occupied" @selected($room->status=='occupied')>Occupied</option>
    <option value="cleaning" @selected($room->status=='cleaning')>Cleaning</option>
    <option value="maintenance" @selected($room->status=='maintenance')>Maintenance</option>
</select>

<button class="bg-blue-500 text-white px-4 py-2">
    Update Room
</button>

</form>

@endsection