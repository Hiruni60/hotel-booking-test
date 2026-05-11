@extends('layouts.app')

@section('title', 'Users')

@section('content')

<a href="#" class="bg-blue-500 text-white px-4 py-2 rounded">
    + Add User
</a>

<table class="w-full mt-5 bg-white shadow rounded">

    <thead class="bg-gray-200">
        <tr>
            <th class="p-3">Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @foreach($users as $user)

            <tr class="border-t">

                <td class="p-3">{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                <td>
                    <span class="bg-blue-100 px-2 py-1 rounded">
                        {{ $user->role?->name }}
                    </span>
                </td>

            </tr>

            @endforeach

    </tbody>

</table>

@endsection
