@extends('layouts.app')

@section('title', 'Roles')

@section('content')

<a href="{{ route('roles.create') }}"
   class="bg-blue-500 text-white px-4 py-2 rounded">
    + Add Role
</a>

<table class="w-full mt-5 bg-white shadow rounded">

    <thead class="bg-gray-200">
        <tr>
            <th class="p-3 text-left">Role</th>
            <th>Permissions</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach($roles as $role)
        <tr class="border-t">

            <td class="p-3">{{ $role->name }}</td>

            <td>
                @foreach($role->permissions as $perm)
                    <span class="bg-gray-200 px-2 py-1 rounded text-sm">
                        {{ $perm->name }}
                    </span>
                @endforeach
            </td>

            <button class="text-blue-500"><a href="{{ route('users.edit', $user) }}">Edit</a></button>
            <button class="text-red-500">Delete</button>

        </tr>
        @endforeach

    </tbody>

</table>

@endsection
