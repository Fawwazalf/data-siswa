<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Edit</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
    </head>
    <body class="container py-5">
        <a href="{{ url('/') }}" class="btn btn-secondary mb-3">Back</a>

        <div class="card shadow p-4">
            <h2 class="mb-4">Edit</h2>

            @if(session('message'))
            <div class="alert alert-success">{{ session("message") }}</div>
            @endif

            <form
                action="{{ route('siswas.update', $siswa->id) }}"
                method="post"
            >
                @csrf @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nama"
                        id="nama"
                        placeholder="Enter siswa nama"
                        value="{{ old('nama', default: $siswa->nama) }}"
                    />
                    @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nisn"
                        id="nisn"
                        placeholder="Enter nisn"
                        value="{{ old('nisn', $siswa->nisn) }}"
                    />
                    @error('nisn')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
