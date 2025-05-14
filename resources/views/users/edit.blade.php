@extends('layouts.app')

@section('section')
    <div class="card p-4 shadow">
        <h2 class="mb-4">Edit User</h2>

        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            \
            <div class="input-area mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                    value="{{ old('name', $user->name) }}" />
                @isset($errors)
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                @endisset

            </div>

            <div class="input-area mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" min="0" step="1" class="form-control" name="email" id="email"
                    placeholder="Enter email" value="{{ old('email', $user->email) }}" />

                @isset($errors)
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                @endisset

            </div>
            <div class="input-area mb-3">
                <label for="password" class="form-label">Password (Biarkan kosong jika tidak ingin mengubah
                    password.)</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter new password"
                    value="{{ old('password') }}" />

                @isset($errors)
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                @endisset
            </div>
            <div class="input-area mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" id="role" class="form-control">
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}"
                            {{ old('roles', $user->roles->first()->name ?? '') === $role->name ? 'selected' : '' }}>
                            {{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit"
                class="font-Inter block w-max rounded-md bg-white px-4 py-2 text-sm font-medium text-slate-900 hover:bg-opacity-80">Create</button>
        </form>
    </div>
@endsection

@section('breadcrumb')
    <ul class="m-0 list-none p-0">
        <li class="text-primary-500 font-Inter relative top-[3px] inline-block text-base">
            <a href="/">
                <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                <iconify-icon icon="heroicons-outline:chevron-right"
                    class="relative text-sm text-slate-500 rtl:rotate-180"></iconify-icon>
            </a>
        </li>
        <li class="text-primary-500 font-Inter relative inline-block text-sm">
            Table
            <iconify-icon icon="heroicons-outline:chevron-right"
                class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
            User
            <iconify-icon icon="heroicons-outline:chevron-right"
                class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
            Edit

        </li>
    </ul>
@endsection

@section('active')
    @can('read-siswa')
        <li>
            <a href="{{ route(name: 'siswas.index') }}">Siswa</a>
        </li>
    @endcan
    @can('read-hobby')
        <li>
            <a href="{{ route('hobbies.index') }}">Hobby
            </a>
        </li>
    @endcan
    @can('read-user')
        <li>
            <a href="{{ route(name: 'users.index') }}" class="active">User</a>
        </li>
    @endcan
    @can('read-role')
        <li>
            <a href="{{ route('roles.index') }}">Role
            </a>
        </li>
    @endcan
@endsection
