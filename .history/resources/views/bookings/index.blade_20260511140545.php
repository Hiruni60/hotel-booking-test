@extends('layouts.app')

@section('title', 'Bookings')

@section('content')

@if(auth()->user()->hasPermission('create-bookings'))
    <a href="{{ route('bookings.create') }}"
       class="bg-green-500 text-white px-4 py-2 rounded">
        + New Booking
    </a>
@endif

<table class="w-full mt-5 bg-white shadow rounded">

<thead class="bg-gray-200">
<tr>
    <th>Guest</th>
    <th>Guest Phone</th>
    <th>Room</th>
    <th>Room type</th>
    <th>Check In</th>
    <th>Check Out</th>
    <th>Action</th>
</tr>
</thead>

<tbody>

@foreach($bookings as $booking)
<tr class="border-t">
    <td class="p-2">{{ $booking->guest->name }}</td>
    <td>{{ $booking->guest->phone }}</td>
    <td>{{ $booking->room->room_number }}</td>
    <td>{{ $booking->room->room_type }}</td>
    <td>{{ $booking->check_in }}</td>
    <td>{{ $booking->check_out }}</td>

    <td class="flex gap-2">
        <a href="{{ route('bookings.edit', $booking->id) }}"
           class="text-blue-500">Edit</a>

        @if(auth()->user()->hasPermission('cancel-bookings'))
            <form method="POST"
                action="{{ route('bookings.destroy', $booking->id) }}">
                @csrf
                @method('DELETE')

                <button class="text-red-500">
                    Cancel
                </button>
            </form>
        @endif
    </td>
</tr>
@endforeach

</tbody>

</table>

@endsection