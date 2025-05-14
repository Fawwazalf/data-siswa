<div class="space-y-5">
    <div class="card">
        <header class="card-header noborder">
            <h4 class="card-title">User Table
            </h4>
            @can(abilities: 'create-role')
                <a href="{{ route('roles.create') }}"
                    class="font-Inter block w-max rounded-md bg-white px-4 py-2 text-sm font-medium text-slate-900 hover:bg-opacity-80">Add
                    Role</a>
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
                                        Role
                                    </th>
                                    <th scope="col" class="table-th">
                                        Permissions
                                    </th>
                                    @can('update-role')
                                        @can('delete-role')
                                            <th scope="col" class="table-th">
                                                Action
                                            </th>
                                        @endcan
                                    @endcan
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 bg-white dark:divide-slate-700 dark:bg-slate-800">
                                @foreach ($roles as $key => $role)
                                    <tr>
                                        <td class="table-td">
                                            {{ ($roles->currentPage() - 1) * $roles->perPage() + $key + 1 }}</td>
                                        <td class="table-td">
                                            <span
                                                class="text-sm capitalize text-slate-600 dark:text-slate-300">{{ $role->name }}</span>
                                        </td>
                                        <td class="table-td">
                                            {{ $role->permissions->pluck('name')->implode(', ') }}
                                        </td>
                                        @can('update-role')
                                            @can('delete-role')
                                                <td class="table-td">
                                                    <div>
                                                        <div class="relative">
                                                            <div class="dropdown relative">
                                                                <button class="block w-full text-center text-xl" type="button"
                                                                    id="tableDropdownMenuButton{{ $role->id }}"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <iconify-icon
                                                                        icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                                </button>
                                                                <ul
                                                                    class="dropdown-menu absolute z-[2] float-left m-0 mt-1 hidden min-w-[120px] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-sm text-slate-700 shadow dark:bg-slate-700 dark:text-white">

                                                                    <li>
                                                                        <a href="{{ route('roles.edit', $role->id) }}"
                                                                            class="font-Inter block w-full px-4 py-2 text-left font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
                                                                            Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <form action="{{ route('roles.destroy', $role->id) }}"
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
                                            @endcan
                                        @endcan
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-6 flex items-center justify-end">
                            {{ $roles->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
