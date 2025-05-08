@extends('layouts.app')

@section('active')
<li>
    <a href="{{ route(name: 'siswas.index') }}" >Siswa</a>
  </li>

  <li>
    <a href="{{ route('hobbies.index') }}">Hobby
    </a>
  </li>
@endsection
@section('section')
@include('siswas._table')
@include('nisns._table')
@include('phone_numbers._table')
@include('hobbies._table')
@endsection

