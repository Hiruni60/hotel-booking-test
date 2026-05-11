@extends('layouts.app')

@section('title', 'Create User')

@section('content')

<a href="{{ route('rooms.index') }}"
            class="bg-gray-500 text-white  px-4 py-2 rounded">
                ← Back
</a>

<form method="POST" action="{{ route('users.store') }}"
      class="bg-white p-5 rounded shadow">

    @csrf

    <input type="text" name="name" placeholder="Name"
           class="w-full border p-2 mb-3 rounded">

    <input type="email" name="email" placeholder="Email"
           class="w-full border p-2 mb-3 rounded">

    <input type="password" name="password" placeholder="Password"
           class="w-full border p-2 mb-3 rounded">

    <select name="role_id" class="w-full border p-2 mb-3 rounded">

        <option value="">Select Role</option>

        @foreach($roles as $role)
            <option value="{{ $role->id }}">
                {{ $role->name }}
            </option>
        @endforeach

    </select>

    <button class="bg-green-500 text-white px-4 py-2 rounded">
        Create User
    </button>

</form>

@endsection
