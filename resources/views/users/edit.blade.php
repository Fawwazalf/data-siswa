
@extends('layouts.app')


@section('section')

    <div class="card shadow p-4">
        <h2 class="mb-4">Edit User</h2>

        @if(session('message'))
        <div class="alert alert-success">{{ session("message") }}</div>
        @endif

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
\
            <div class="mb-3 input-area">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ old('name', $user->name) }}" />
                @isset($errors)
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
@endisset

            </div>

            <div class="mb-3 input-area">
                <label for="email" class="form-label">Email</label>
                <input type="email" min="0" step="1" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email', $user->email) }}" />

               @isset($errors)
    @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
@endisset

            </div>
            <div class="mb-3 input-area">
                <label for="password" class="form-label">Password (Biarkan kosong jika tidak ingin mengubah password.)</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter new password" value="{{ old('password') }}" />
               


                @isset($errors)
    @error('password')
        <div class="text-danger">{{ $message }}</div>
    @enderror
@endisset
            </div>
            <div class="mb-3 input-area">
                <label for="role" class="form-label">Role</label>
                <select name="role" id="role" class="form-control">
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}"  {{ old('roles', $user->roles->first()->name ?? '') === $role->name ? 'selected' : '' }}>
            {{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="bg-white hover:bg-opacity-80 text-slate-900 text-sm font-Inter rounded-md w-max block py-2 font-medium px-4">Create</button>
        </form>
    </div>

    @endsection
