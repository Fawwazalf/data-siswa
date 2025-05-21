<div class="space-y-5">
    <div class="card">
        <header class="card-header noborder">
            <h4 class="card-title">Siswa Table
            </h4>
            @can(abilities: 'create-siswa')
                <a href="{{ route('siswas.create') }}"
                    class="font-Inter block w-max rounded-md bg-white px-4 py-2 text-sm font-medium text-slate-900 hover:bg-opacity-80">Add
                    Siswa</a>
            @endcan
        </header>
        <div class="card-body px-6 pb-6">
            <div class="dashcode-data-table -mx-6 overflow-x-auto">
                <span class="col-span-8 hidden"></span>
                <span class="col-span-4 hidden"></span>
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full table-fixed divide-y divide-slate-100 dark:divide-slate-700"
                            id="data-table">
                            <thead class="border-t border-slate-100 dark:border-slate-800">
                                <tr>

                                    <th scope="col" class="table-th">
                                        Id
                                    </th>

                                    <th scope="col" class="table-th">
                                        Name
                                    </th>

                                    <th scope="col" class="table-th">
                                        NISN
                                    </th>

                                    <th scope="col" class="table-th">
                                        Phone Number
                                    </th>
                                    <th scope="col" class="table-th">
                                        Hobby
                                    </th>

                                    @canany(['update-siswa', 'delete-siswa'])
                                        <th scope="col" class="table-th">
                                            Action
                                        </th>
                                    @endcanany
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 bg-white dark:divide-slate-700 dark:bg-slate-800">
                                @foreach ($siswas as $key => $siswa)
                                    <tr>
                                        <td class="table-td">
                                            {{ ($siswas->currentPage() - 1) * $siswas->perPage() + $key + 1 }}</td>
                                        <td class="table-td">
                                            <span
                                                class="text-sm capitalize text-slate-600 dark:text-slate-300">{{ $siswa->nama }}</span>
                                        </td>
                                        <td class="table-td">{{ $siswa->nisn?->nisn }}</td>
                                        <td class="table-td">
                                            <div>
                                                @if ($siswa->phone_numbers->isNotEmpty())
                                                    <ul class="mb-0">
                                                        @foreach ($siswa->phone_numbers as $phone)
                                                            <li>{{ $phone->phone_number }}</li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <em>kosong</em>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="table-td">
                                            <div>
                                                @if ($siswa->hobbies->isNotEmpty())
                                                    <ul class="mb-0">
                                                        @foreach ($siswa->hobbies as $hobby)
                                                            <li>{{ $hobby->hobby }}</li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <em>kosong</em>
                                                @endif
                                            </div>
                                        </td>
                                        @canany(['update-siswa', 'delete-siswa'])
                                            <td class="table-td">
                                                <div>
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="block w-full text-center text-xl" type="button"
                                                                id="tableDropdownMenuButton{{ $siswa->id }}"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <iconify-icon
                                                                    icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                            </button>
                                                            <ul
                                                                class="dropdown-menu absolute z-[2] float-left m-0 mt-1 hidden min-w-[120px] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-sm text-slate-700 shadow dark:bg-slate-700 dark:text-white">

                                                                <li>
                                                                    @can('update-siswa')
                                                                        <a href="{{ route('siswas.edit', $siswa->id) }}"
                                                                            class="font-Inter block w-full px-4 py-2 text-left font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
                                                                            Edit</a>
                                                                    @endcan
                                                                </li>
                                                                <li>
                                                                    @can('delete-siswa')
                                                                        <form action="{{ route('siswas.destroy', $siswa->id) }}"
                                                                            method="POST">
                                                                            @csrf @method('DELETE')

                                                                            <button type="submit"
                                                                                class="font-Inter block w-full px-4 py-2 text-left font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white"
                                                                                onclick="return confirm('Are you sure?')">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                    @endcan
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        @endcanany

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-6 flex items-center justify-end">
                            {{ $siswas->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
