@extends('layouts.app')

@section('title', 'Rooms')

@section('content')

<a href="#" class="bg-blue-500 text-white px-4 py-2 rounded">
    + Add Room
</a>

<table class="w-full mt-5 bg-white shadow rounded">

    <thead class="bg-gray-200">
        <tr>
            <th class="p-3 text-left">Room</th>
            <th>Type</th>
            <th>Floor</th>
            <th>Capacity</th>
            <th>Price</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        <tr class="border-t">
            <td class="p-3">101</td>
            <td>Deluxe</td>
            <td>1</td>
            <td>2</td>
            <td>10000</td>
            <td>Available</td>
            <td>
                <button class="text-blue-500">Edit</button>
                <button class="text-red-500">Delete</button>
            </td>
        </tr>

    </tbody>

</table>

@endsection
