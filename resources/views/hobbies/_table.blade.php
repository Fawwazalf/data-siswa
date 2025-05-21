<div class="space-y-5">
    <div class="card">
        <header class="card-header noborder">
            <h4 class="card-title">Hobby Table
            </h4>
            @can(abilities: 'create-hobby')
                <button data-bs-toggle="modal" data-bs-target="#basic_modal"
                    class="font-Inter block w-max rounded-md bg-white px-4 py-2 text-sm font-medium text-slate-900 hover:bg-opacity-80">
                    Add Hobby
                </button>
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
                                        Hobby
                                    </th>

                                    <th scope="col" class="table-th">
                                        Name
                                    </th>
                                    @canany(['update-hobby', 'delete-hobby'])
                                        <th scope="col" class="table-th">
                                            Action
                                        </th>
                                    @endcanany
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 bg-white dark:divide-slate-700 dark:bg-slate-800">
                                @foreach ($hobbies as $key => $hobby)
                                    <tr>
                                        <td class="table-td">
                                            {{ ($hobbies->currentPage() - 1) * $hobbies->perPage() + $key + 1 }}</td>

                                        <td class="table-td">

                                            <span
                                                class="text-sm capitalize text-slate-600 dark:text-slate-300">{{ $hobby->hobby }}</span>

                                        </td>

                                        <td class="table-td">
                                            <div>
                                                @if ($hobby->siswas->isNotEmpty())
                                                    <ul class="mb-0">
                                                        @foreach ($hobby->siswas as $siswa)
                                                            <li>{{ $siswa->nama }}</li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <em>kosong</em>
                                                @endif
                                        </td>

                                        @canany(['update-hobby', 'delete-hobby'])
                                            <td class="table-td">
                                                <div>
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="block w-full text-center text-xl" type="button"
                                                                id="tableDropdownMenuButton{{ $hobby->id }}"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <iconify-icon
                                                                    icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                            </button>
                                                            <ul
                                                                class="dropdown-menu absolute z-[2] float-left m-0 mt-1 hidden min-w-[120px] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-sm text-slate-700 shadow dark:bg-slate-700 dark:text-white">
                                                                @can('update-hobby')
                                                                    <li>

                                                                        <button data-bs-toggle="modal"
                                                                            data-bs-target="#edit_modal_{{ $hobby->id }}"
                                                                            class="font-Inter block px-4 py-2 font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
                                                                            Edit</button>
                                                                    </li>
                                                                @endcan
                                                                <li>
                                                                    @can('delete-hobby')
                                                                        <form
                                                                            action="{{ route('hobbies.destroy', $hobby->id) }}"
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
                            {{ $hobbies->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade fixed left-0 top-0 hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="basic_modal" tabindex="-1" aria-labelledby="basic_modal" aria-hidden="true">
        <div class="modal-dialog pointer-events-none relative w-auto">
            <div
                class="modal-content pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
                <div class="relative rounded-lg bg-white shadow dark:bg-slate-700">

                    <div
                        class="bg-black-500 flex items-center justify-between rounded-t border-b p-5 dark:border-slate-600">
                        <h3 class="text-xl font-medium capitalize text-white dark:text-white">
                            Create Hobby
                        </h3>
                        <button type="button"
                            class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-slate-400 hover:text-slate-900 dark:hover:bg-slate-600 dark:hover:text-white"
                            data-bs-dismiss="modal">
                            <svg aria-hidden="true" class="h-5 w-5" fill="#ffffff" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <div class="space-y-4 p-6">
                        @if (session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        <form action="{{ route('hobbies.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="hobby" class="form-label">Hobby</label>
                                <input type="text" class="form-control" name="hobby" id="hobby"
                                    placeholder="Enter hobby" value="{{ old('hobby') }}" />
                                @isset($errors)
                                    @error('hobby')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                @endisset
                            </div>

                            <div
                                class="flex items-center justify-end space-x-2 border-t border-slate-200 pt-4 dark:border-slate-600">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit"
                                    class="btn bg-black-500 inline-flex justify-center text-white">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($hobbies as $hobby)
        <div class="modal fade fixed left-0 top-0 hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="edit_modal_{{ $hobby->id }}" tabindex="-1" aria-labelledby="edit_modal_label_{{ $hobby->id }}"
            aria-hidden="true">
            <div class="modal-dialog pointer-events-none relative w-auto">
                <div
                    class="modal-content pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
                    <div class="relative rounded-lg bg-white shadow dark:bg-slate-700">

                        <div
                            class="bg-black-500 flex items-center justify-between rounded-t border-b p-5 dark:border-slate-600">
                            <h3 class="text-xl font-medium capitalize text-white dark:text-white">
                                Edit Hobby
                            </h3>
                            <button type="button"
                                class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-slate-400 hover:text-slate-900 dark:hover:bg-slate-600 dark:hover:text-white"
                                data-bs-dismiss="modal">
                                <svg aria-hidden="true" class="h-5 w-5" fill="#ffffff" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>

                        <!-- Modal Body -->
                        <div class="space-y-4 p-6">
                            <form action="{{ route('hobbies.update', $hobby->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="hobby_{{ $hobby->id }}" class="form-label">Hobby</label>
                                    <input type="text" class="form-control" name="hobby"
                                        id="hobby_{{ $hobby->id }}" value="{{ $hobby->hobby }}" />
                                    @error('hobby')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Modal Footer -->
                                <div
                                    class="flex items-center justify-end space-x-2 border-t border-slate-200 pt-4 dark:border-slate-600">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit"
                                        class="btn bg-black-500 inline-flex justify-center text-white">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
