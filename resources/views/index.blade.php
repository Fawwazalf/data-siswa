<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Data Siswa</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
    </head>
    <body class="container py-4">
        <div class="mb-3">
        <a href="{{ route('logout') }}" class="btn btn-danger"
                >Logout</a
            >
            <a href="{{ route('siswas.create') }}" class="btn btn-primary"
                >Add Siswa</a
            >
            <a href="{{ route('nisns.create') }}" class="btn btn-success"
                >Add NISN</a
            >
            <a href="{{ route('phone_numbers.create') }}" class="btn btn-success"
                >Add Phone Number</a
            >
            <a href="{{ route('hobbies.create') }}" class="btn btn-success"
                >Add Hobby</a
            >
        </div>


        <h1 class="text-center mb-4">Data Siswa</h1>

        @if(session('message'))
        <div class="alert alert-success">{{ session("message") }}</div>
        @endif

        <h2 class="mt-4">Siswa List</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                  
                    <th>NISN</th>
                    <th>No HP</th>
                    <th>Hobbies</th>
                    <th>Action</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($siswas as $key => $siswa)
                <tr>
                    <td>
                        {{ ($siswas->currentPage() - 1) * $siswas->perPage() + $key + 1 }}
                    </td>
                    <td>{{ $siswa->nama }}</td>
                   
                    <td>{{ $siswa->nisn?->nisn }}</td>
                    <td>
                    @if ($siswa->phone_numbers->isNotEmpty())
                        <ul class="mb-0">
                            @foreach ($siswa->phone_numbers as $phone)
                                <li>{{ $phone->phone_number }}</li>
                            @endforeach
                        </ul>
                    @else
                        <em>kosong</em>
                    @endif
                </td> <td>
                    @if ($siswa->hobbies->isNotEmpty())
                        <ul class="mb-0">
                            @foreach ($siswa->hobbies as $hobby)
                                <li>{{ $hobby->hobby }}</li>
                            @endforeach
                        </ul>
                    @else
                        <em>kosong</em>
                    @endif
                </td>
                    <td>
                        <a
                            href="{{ route('siswas.edit', $siswa->id) }}"
                            class="btn btn-warning btn-sm"
                            >Edit</a
                        >
                        <form
                            action="{{ route('siswas.destroy', $siswa->id) }}"
                            method="POST"
                            class="d-inline"
                        >
                            @csrf @method('DELETE')
                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')"
                            >
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $siswas->links('pagination::bootstrap-5') }}
        </div>

        <h2 class="mt-5">NISN List</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>NISN</th>
                    <th>Nama siswa</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nisns as $key => $nisn)
                <tr>
                    <td>
                        {{ ($nisns->currentPage() - 1) * $nisns->perPage() + $key + 1 }}
                    </td>
                    <td>{{ $nisn?->nisn}}</td>
                    <td>{{ $nisn->siswa->nama }}</td>
                    <td>
                        <a
                            href="{{ route('nisns.edit', $nisn->id) }}"
                            class="btn btn-warning btn-sm"
                            >Edit</a
                        >
                        <form
                            action="{{ route('nisns.destroy', $nisn->id) }}"
                            method="POST"
                            class="d-inline"
                        >
                            @csrf @method('DELETE')
                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')"
                            >
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $nisns->links('pagination::bootstrap-5') }}
        </div>
        <h2 class="mt-5">Phone Number List</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Phone Number</th>
                    <th>Nama siswa</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($phone_numbers as $key => $phone_number)
                <tr>
                    <td>
                        {{ ($phone_numbers->currentPage() - 1) * $phone_numbers->perPage() + $key + 1 }}
                    </td>
                    <td>{{ $phone_number?->phone_number}}</td>
                    <td>{{ $phone_number->siswa->nama }}</td>
                    <td>
                        <a
                            href="{{ route('phone_numbers.edit', $phone_number->id) }}"
                            class="btn btn-warning btn-sm"
                            >Edit</a
                        >
                        <form
                            action="{{ route('phone_numbers.destroy', $phone_number->id) }}"
                            method="POST"
                            class="d-inline"
                        >
                            @csrf @method('DELETE')
                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')"
                            >
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $phone_numbers->links('pagination::bootstrap-5') }}
        </div>
        <h2 class="mt-5">Hobby List</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Phone Number</th>
                    <th>Nama siswa</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hobbies as $key => $hobby)
                <tr>
                    <td>
                        {{ ($hobbies->currentPage() - 1) * $hobbies->perPage() + $key + 1 }}
                    </td>
                    <td>{{ $hobby->hobby}}</td>
                    <td> @if ($hobby->siswas->isNotEmpty())
                        <ul class="mb-0">
                            @foreach ($hobby->siswas as $siswa)
                                <li>{{ $siswa->nama }}</li>
                            @endforeach
                        </ul>
                    @else
                        <em>kosong</em>
                    @endif</td>
                    <td>
                        <a
                            href="{{ route('hobbies.edit', $hobby->id) }}"
                            class="btn btn-warning btn-sm"
                            >Edit</a
                        >
                        <form
                            action="{{ route('hobbies.destroy', $hobby->id) }}"
                            method="POST"
                            class="d-inline"
                        >
                            @csrf @method('DELETE')
                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')"
                            >
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $hobbies->links('pagination::bootstrap-5') }}
        </div>   </body>
</html>
