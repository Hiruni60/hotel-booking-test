@extends('layouts.app')

@section('title', 'Booking History')

@section('content')

<div class="bg-white p-5 rounded shadow">

    <h2 class="text-xl font-bold mb-4">Booking History</h2>

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