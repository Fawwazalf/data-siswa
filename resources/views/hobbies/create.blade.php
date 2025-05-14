<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Hobby</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="container py-5">
    <a href="{{ url('/') }}" class="btn btn-secondary mb-3">Back</a>
    <div class="card p-4 shadow">
        <h2 class="mb-4">Create</h2>
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <form action="{{ route('hobbies.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nisn" class="form-label">Hobby</label>
                <input type="text" class="form-control" name="hobby" id="hobby"
                    placeholder="Enter phone number" value="{{ old('hobby') }}" />
                @error('hobby')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter nama"
                    value="{{ old('nama') }}" />
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

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
