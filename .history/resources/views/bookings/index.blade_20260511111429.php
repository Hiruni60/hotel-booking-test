@extends('layouts.app')

@section('title', 'Bookings')

@section('content')

<a href="#" class="bg-green-500 text-white px-4 py-2 rounded">
    + New Booking
</a>

<table class="w-full mt-5 bg-white shadow rounded">

    <thead class="bg-gray-200">
        <tr>
            <th class="p-3">Guest</th>
            <th>Room</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        <tr class="border-t">
            <td class="p-3">John Doe</td>
            <td>101</td>
            <td>2026-05-10</td>
            <td>2026-05-12</td>
            <td>Confirmed</td>
            <td>
                <button class="text-red-500">Cancel</button>
            </td>
        </tr>

    </tbody>

</table>

@endsection
