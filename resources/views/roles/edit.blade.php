@extends('layouts.app')

@section('title', 'Edit Role')

@section('content')


<a href="{{ route('roles.index') }}"
            class="bg-gray-500 text-white  px-4 py-2 rounded">
                ← Back
</a>

<form method="POST" action="{{ route('roles.update', ['id' => $role->id]) }}"
      class="bg-white p-5 rounded shadow">

    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block">Role Name</label>
        <input type="text" name="name"
               value="{{ $role->name }}"
               class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-2">Permissions</label>

        @foreach($permissions as $permission)
            <label class="block">
                <input type="checkbox"
                       name="permissions[]"
                       value="{{ $permission->id }}"
                       {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}>

                {{ $permission->name }}
            </label>
        @endforeach

    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Update Role
    </button>

</form>

@endsection
