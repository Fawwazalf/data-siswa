@extends('layouts.app')

@section('section')
    <div class="card p-4 shadow">
        <h2 class="mb-4">Edit Role</h2>

        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf

            <div class="input-area mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                    value="{{ old('name') }}" />
                @isset($errors)
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                @endisset

            </div>

            <div class="input-area mb-3">
                <label class="form-label">Permissions</label>
                <div class="form-check">
                    @foreach ($permissions as $permission)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="permissions[]"
                                value="{{ $permission->name }}" id="permission-{{ $permission->id }}">
                            <label class="form-check-label text-slate-900 dark:text-[#eee]"
                                for="permission-{{ $permission->id }}">
                                {{ $permission->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
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
            Role
            <iconify-icon icon="heroicons-outline:chevron-right"
                class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
        </li>
        <li class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
            Create
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
            <a href="{{ route(name: 'users.index') }}">User</a>
        </li>
    @endcan
    @can('read-role')
        <li>
            <a href="{{ route('roles.index') }}" class="active">Role
            </a>
        </li>
    @endcan
@endsection
