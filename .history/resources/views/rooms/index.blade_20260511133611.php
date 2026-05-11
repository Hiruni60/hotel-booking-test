@extends('layouts.app')

@section('title', 'Rooms')

@section('content')

<a href="{{ route('rooms.create') }}"
   class="bg-blue-500 text-white px-4 py-2 rounded">
    + Add Room
</a>

<table class="w-full mt-5 bg-white shadow rounded">

    <thead class="bg-gray-200">
        <tr>
            <th>Room</th>
            <th>Type</th>
            <th>Floor </th>
            <th>Capacity </th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($rooms as $room)
        <tr class="border-t">
            <td class="p-2">{{ $room->room_number }}</td>
            <td>{{ $room->room_type }}</td>
            <td>{{ $room->floor }}</td>
            <td>{{ $room->capacity }}</td>
            <td>{{ $room->price_per_night }}</td>
            <td>{{ $room->status }}</td>

            <td class="flex gap-2 p-2">
                <a href="{{ route('rooms.edit', $room->id) }}"
                   class="text-blue-500">Edit</a>

                <form method="POST"
                      action="{{ route('rooms.destroy', $room->id) }}">
                    @csrf @method('DELETE')
                    <button class="text-red-500">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection