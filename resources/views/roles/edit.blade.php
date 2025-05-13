
@extends('layouts.app')


@section('section')

    <div class="card shadow p-4">
        <h2 class="mb-4">Edit Role</h2>

        @if(session('message'))
        <div class="alert alert-success">{{ session("message") }}</div>
        @endif

        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3 input-area">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ old('name', $role->name) }}" />
                @isset($errors)
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
@endisset

            </div>

       
            <div class="mb-3 input-area">
                <label class="form-label">Permissions</label>
                <div class="form-check">
                    @foreach($permissions as $permission)
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   name="permissions[]" 
                                   value="{{ $permission->name }}"
                                   id="permission-{{ $permission->id }}"
                                   {{ $role->permissions->contains($permission) ? 'checked' : '' }}>
                                
                            <label class="form-check-label text-slate-900 dark:text-[#eee]"  for="permission-{{ $permission->id }}">
                                {{ $permission->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
          
            <button type="submit" class="bg-white hover:bg-opacity-80 text-slate-900 text-sm font-Inter rounded-md w-max block py-2 font-medium px-4">Edit</button>
        </form>
    </div>

    @endsection

    
    
    
