<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Edit Hobby</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="container py-5">
    <a href="{{ url('/') }}" class="btn btn-secondary mb-3">Back</a>

    <div class="card shadow p-4">
        <h2 class="mb-4">Edit Hobby</strong></h2>

        @if(session('message'))
        <div class="alert alert-success">{{ session("message") }}</div>
        @endif

        <form action="{{ route('hobbies.update', $hobby->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                    <label for="nisn" class="form-label">Hobby</label>
                    <input
                    type="text"
                    class="form-control"
                    name="hobby"
                    id="hobby"
                    placeholder="Enter hobby"
                    value="{{ old('hobby', $hobby) }}"
                    />
                    @error('hobby')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            <div class="mb-3">
                <label class="form-label">Siswa</label>
                <div class="form-check">
                    
                    @foreach($all_siswas as $siswa)
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   name="siswa_ids[]" 
                                   value="{{ $siswa->id }}"
                                   id="siswa-{{ $siswa->id }}"
                                   {{ $hobby->siswas->contains($siswa->id) ? 'checked' : '' }}>
                            <label class="form-check-label" for="siswa-{{ $siswa->id }}">
                                {{ $siswa->nama }}
                            </label>
                        </div>
                    @endforeach
                </div>
                @error('siswa_ids')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
