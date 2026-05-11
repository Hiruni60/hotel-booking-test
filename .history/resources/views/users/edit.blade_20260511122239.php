@extends('layouts.app')

@section('title', 'Edit User')

@section('content')

<form method="POST" action="{{ route('users.update', ['id' => $user->id]) }}"
      class="bg-white p-5 rounded shadow">

    @csrf
    @method('PUT')

    <div class="mb-4">
        <label>Name</label>
        <input type="text" value="{{ $user->name }}"
               class="w-full border p-2 rounded" disabled>
    </div>

    <div class="mb-4">
        <label>Email</label>
        <input type="email" value="{{ $user->email }}"
               class="w-full border p-2 rounded" >
    </div>


    <div class="mb-4">
        <label>Role</label>
        <select name="role_id" class="w-full border p-2 rounded">

            @foreach($roles as $role)
                <option value="{{ $role->id }}"
                    {{ $user->role_id == $role->id ? 'selected' : '' }}>
                    {{ $role->name }}
                </option>
            @endforeach

        </select>
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Update
    </button>

</form>

@endsection
