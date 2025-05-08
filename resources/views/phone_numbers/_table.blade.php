
<div class=" space-y-5">
  <div class="card">
    <header class=" card-header noborder">
      <h4 class="card-title">Phone Number Table
      </h4>
      <a href="{{ route('phone_numbers.create') }}" class="bg-white hover:bg-opacity-80 text-slate-900 text-sm font-Inter rounded-md w-max block py-2 font-medium px-4"
            >Add Phone Number</a
        >
    </header>
    <div class="card-body px-6 pb-6">
      <div class="overflow-x-auto -mx-6 dashcode-data-table">
        <span class=" col-span-8  hidden"></span>
        <span class="  col-span-4 hidden"></span>
        <div class="inline-block min-w-full align-middle">
          <div class="overflow-hidden ">
<table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                                    <thead class=" border-t border-slate-100 dark:border-slate-800">
                                      <tr>
      
                                        <th scope="col" class=" table-th ">
                                          Id
                                        </th>
      
                                        <th scope="col" class=" table-th ">
                                          Phone Number
                                        </th>
                                        <th scope="col" class=" table-th ">
                                          Name
                                        </th>
      
      
      
                                      
      
                                        <th scope="col" class=" table-th ">
                                          Action
                                        </th>
      
                                      </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                        @foreach($phone_numbers as $key => $phone_number)
                                      <tr>
                                        <td class="table-td">  {{ ($phone_numbers->currentPage() - 1) * $phone_numbers->perPage() + $key + 1 }}</td>
                
                                        <td class="table-td">
                                         
                                          <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">{{ $phone_number->phone_number }}</span>
                                      
                                        </td>
                                        <td class="table-td ">{{ $phone_number->siswa->nama }}</td>
                                       
                                        <td class="table-td ">
                                          <div>
                                            <div class="relative">
                                              <div class="dropdown relative">
                                                <button class="text-xl text-center block w-full " type="button" id="tableDropdownMenuButton{{ $phone_number->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                  <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                </button>
                                                <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                        shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                 
                                                  <li>
                                                    <a href="{{ route('phone_numbers.edit', $phone_number->id) }}" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                            dark:hover:text-white">
                                                      Edit</a>
                                                  </li>
                                                  <li>
                                                    
                                                      <form
                                                      action="{{ route('phone_numbers.destroy', $phone_number->id) }}"
                                                      method="POST"

                                                     
                                                  >
                                                      @csrf @method('DELETE')
                                                      <button
                                                          type="submit"
                                                         class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                            dark:hover:text-white w-full text-left"
                                                          onclick="return confirm('Are you sure?')"
                                                      >
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
                                    </table>  <div class="flex justify-end items-center mt-6">
                                      {{ $phone_numbers->links('pagination::bootstrap-5') }}
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                                    
                               

                               