@extends('layouts.app')
@section('active')
@can('read-siswa')
  
<li>
    <a href="{{ route(name: 'siswas.index') }}" class="active" >Siswa</a>
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
    <a href="{{ route(name: 'users.index') }}" >User</a>
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
@include('siswas._table')
                                  @endsection

                                  @section('breadcrumb')
                                  <ul class="m-0 p-0 list-none">
                                    <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                                      <a href="/">
                                        <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                        <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                                      </a>
                                    </li>
                                    <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                                      Table
                                      <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                                    </li>
                                    <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                      Siswa
                                    </li>
                                  </ul>
                                  @endsection
                                  