@extends('layouts.app')

@section('section')
    @include('nisns._table')
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
            NISN
        </li>
    </ul>
@endsection
