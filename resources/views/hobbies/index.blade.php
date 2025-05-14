@extends('layouts.app')

@section('active')
    @can('read-siswa')
        <li>
            <a href="{{ route(name: 'siswas.index') }}">Siswa</a>
        </li>
    @endcan
    @can('read-hobby')
        <li>
            <a href="{{ route('hobbies.index') }}" class="active">Hobby
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
            <a href="{{ route('roles.index') }}">Role
            </a>
        </li>
    @endcan
@endsection
@section('section')
    @include('hobbies._table')
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
            Hobby
        </li>
    </ul>
@endsection
