<div class="space-y-5">
    <div class="card">
        <header class="card-header noborder">
            <h4 class="card-title">Phone Number Table
            </h4>
            <a href="{{ route('phone_numbers.create') }}"
                class="font-Inter block w-max rounded-md bg-white px-4 py-2 text-sm font-medium text-slate-900 hover:bg-opacity-80">Add
                Phone Number</a>
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
                                        Phone Number
                                    </th>
                                    <th scope="col" class="table-th">
                                        Name
                                    </th>
                                    <th scope="col" class="table-th">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 bg-white dark:divide-slate-700 dark:bg-slate-800">
                                @foreach ($phone_numbers as $key => $phone_number)
                                    <tr>
                                        <td class="table-td">
                                            {{ ($phone_numbers->currentPage() - 1) * $phone_numbers->perPage() + $key + 1 }}
                                        </td>

                                        <td class="table-td">
                                            <span
                                                class="text-sm capitalize text-slate-600 dark:text-slate-300">{{ $phone_number->phone_number }}</span>
                                        </td>
                                        <td class="table-td">{{ $phone_number->siswa->nama }}</td>

                                        <td class="table-td">
                                            <div>
                                                <div class="relative">
                                                    <div class="dropdown relative">
                                                        <button class="block w-full text-center text-xl" type="button"
                                                            id="tableDropdownMenuButton{{ $phone_number->id }}"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <iconify-icon
                                                                icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                        </button>
                                                        <ul
                                                            class="dropdown-menu absolute z-[2] float-left m-0 mt-1 hidden min-w-[120px] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-sm text-slate-700 shadow dark:bg-slate-700 dark:text-white">
                                                            <li>
                                                                <a href="{{ route('phone_numbers.edit', $phone_number->id) }}"
                                                                    class="font-Inter block px-4 py-2 font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
                                                                    Edit</a>
                                                            </li>
                                                            <li>
                                                                <form
                                                                    action="{{ route('phone_numbers.destroy', $phone_number->id) }}"
                                                                    method="POST">
                                                                    @csrf @method('DELETE')
                                                                    <button type="submit"
                                                                        class="font-Inter block w-full px-4 py-2 text-left font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white"
                                                                        onclick="return confirm('Are you sure?')">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-6 flex items-center justify-end">
                            {{ $phone_numbers->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
