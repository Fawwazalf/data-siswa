<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create NISN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="container py-5">
    <a href="{{ url('/') }}" class="btn btn-secondary mb-3">Back</a>
    <div class="card p-4 shadow">
        <h2 class="mb-4">Create</h2>
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <form action="{{ route('phone_numbers.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nisn" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone_number" id="phone_number"
                    placeholder="Enter phone number" value="{{ old('phone_number') }}" />
                @error('phone_number')
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
