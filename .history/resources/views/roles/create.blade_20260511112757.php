@extends('layouts.app')

@section('title', 'Create Role')

@section('content')

<form method="POST" action="{{ route('roles.store') }}"
      class="bg-white p-5 rounded shadow">

    @csrf

    <div class="mb-4">
        <label class="block">Role Name</label>
        <input type="text" name="name"
               class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-2">Permissions</label>

        @foreach($permissions as $permission)
            <label class="block">
                <input type="checkbox"
                       name="permissions[]"
                       value="{{ $permission->id }}">
                {{ $permission->name }}
            </label>
        @endforeach
    </div>

    <button class="bg-green-500 text-white px-4 py-2 rounded">
        Save Role
    </button>

</form>

@endsection
