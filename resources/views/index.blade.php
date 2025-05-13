@extends('layouts.app')

@section('active')
@can('read-siswa')
  
<li>
    <a href="{{ route(name: 'siswas.index') }}" >Siswa</a>
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
@can('read-siswa')
  
@include('siswas._table')
@endcan
@can('read-hobby')
@include('hobbies._table')
@endcan
@endsection

