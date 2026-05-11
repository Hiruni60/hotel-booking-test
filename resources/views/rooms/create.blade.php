@extends('layouts.app')

@section('title', 'Create Room')

@section('content')

<a href="{{ route('rooms.index') }}"
            class="bg-gray-500 text-white  px-4 py-2 rounded">
                ← Back
</a>

<form method="POST" action="{{ route('rooms.store') }}"
      class="bg-white p-5 rounded shadow">

@csrf

<input name="room_number" placeholder="Room Number"
       class="w-full border p-2 mb-2">

<input name="room_type" placeholder="Room Type"
       class="w-full border p-2 mb-2">

<input name="floor" placeholder="Floor"
       class="w-full border p-2 mb-2">

<input name="capacity" placeholder="Capacity"
       class="w-full border p-2 mb-2">

<input name="price_per_night" placeholder="Price"
       class="w-full border p-2 mb-2">

<select name="status" class="w-full border p-2 mb-2">
    <option value="available">Available</option>
    <option value="occupied">Occupied</option>
    <option value="cleaning">Cleaning</option>
    <option value="maintenance">Maintenance</option>
</select>

<button class="bg-green-500 text-white px-4 py-2">
    Save Room
</button>

</form>

@endsection