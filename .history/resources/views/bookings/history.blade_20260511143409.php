@extends('layouts.app')

@section('title', 'Booking History')

@section('content')

<div class="bg-white p-5 rounded shadow">

    <h2 class="text-xl font-bold mb-4">Booking History</h2>

    <form method="GET" class="bg-white p-4 rounded shadow mb-4">

    <div class="grid grid-cols-5 gap-3">

        {{-- SEARCH --}}
        <input type="text"
               name="search"
               value="{{ request('search') }}"
               placeholder="Search guest / room"
               class="border p-2 rounded">

        {{-- FROM DATE --}}
        <input type="date"
               name="from_date"
               value="{{ request('from_date') }}"
               class="border p-2 rounded">

        {{-- TO DATE --}}
        <input type="date"
               name="to_date"
               value="{{ request('to_date') }}"
               class="border p-2 rounded">

        {{-- STATUS --}}
        <select name="status" class="border p-2 rounded">
            <option value="">All Status</option>
            <option value="confirmed" @selected(request('status')=='confirmed')>Confirmed</option>
            <option value="cancelled" @selected(request('status')=='cancelled')>Cancelled</option>
            <option value="completed" @selected(request('status')=='completed')>Completed</option>
        </select>

        {{-- ROOM --}}
        <select name="room_id" class="border p-2 rounded">
            <option value="">All Rooms</option>
            @foreach($rooms as $room)
                <option value="{{ $room->id }}"
                    @selected(request('room_id')==$room->id)>
                    {{ $room->room_number }}
                </option>
            @endforeach
        </select>

    </div>

    <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded">
        Filter
    </button>

</form>

    <table class="w-full border">

        <thead class="bg-gray-200">
            <tr>
                <th class="p-2">Room</th>
                <th class="p-2">Guest</th>
                <th class="p-2">Booked By</th>
                <th class="p-2">Check In</th>
                <th class="p-2">Check Out</th>
                <th class="p-2">Status</th>
                <th class="p-2">Created At</th>
            </tr>
        </thead>

        <tbody>
            @foreach($bookings as $booking)
                <tr class="border-t">
                    <td class="p-2">
                        {{ $booking->room->room_number }}
                    </td>

                    <td class="p-2">
                        {{ $booking->guest->name }}
                    </td>

                    <td class="p-2">
                        {{ $booking->user->name }}
                    </td>

                    <td class="p-2">
                        {{ $booking->check_in }}
                    </td>

                    <td class="p-2">
                        {{ $booking->check_out }}
                    </td>

                    <td class="p-2">
                        <span class="px-2 py-1 rounded text-white {{ $booking->status == 'confirmed' ? 'bg-green-500' : ($booking->status == 'cancelled' ? 'bg-red-500' : 'bg-gray-500') }}">
                            {{ $booking->status }}
                        </span>
                    </td>

                    <td class="p-2">
                        {{ $booking->created_at->format('Y-m-d') }}
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection