<div class=" space-y-5">
    <div class="card">
      <header class=" card-header noborder">
        <h4 class="card-title ">Hobby Table
        </h4>
        @can(abilities: 'create-hobby' )
        <button data-bs-toggle="modal" data-bs-target="#basic_modal" class="bg-white hover:bg-opacity-80 text-slate-900 text-sm font-Inter rounded-md w-max block py-2 font-medium px-4">
            Add Hobby
        </button>
          @endcan
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
                                            Hobby
                                          </th>
        
                                          <th scope="col" class=" table-th ">
                                            Name
                                          </th>
        
                                        
        
                                        
           @can('update-hobby')
    @can('delete-hobby')
                                          <th scope="col" class=" table-th ">
                                            Action
                                          </th>
        @endcan
        @endcan
        
                                        </tr>
                                      </thead>
                                      <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                          @foreach($hobbies as $key => $hobby)
                                        <tr>
                                          <td class="table-td">  {{ ($hobbies->currentPage() - 1) * $hobbies->perPage() + $key + 1 }}</td>
                  
                                          <td class="table-td">
                                           
                                            <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">{{ $hobby->hobby }}</span>
                                        
                                          </td>
                                        
                                          <td class="table-td ">
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
                                        
@can('update-hobby')
    @can('delete-hobby')
                                          <td class="table-td ">
                                            <div>
                                              <div class="relative">
                                                <div class="dropdown relative">
                                                  <button class="text-xl text-center block w-full " type="button" id="tableDropdownMenuButton{{ $hobby->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                  </button>
                                                  <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                          shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                   
                                                    <li>
                                                      <button data-bs-toggle="modal" data-bs-target="#edit_modal_{{ $hobby->id }}" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                              dark:hover:text-white">
                                                        Edit</button>
                                                    </li>
                                                    <li>
                                                      
                                                        <form
                                                        action="{{ route('hobbies.destroy', $hobby->id) }}"
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
                                          @endcan
                                          @endcan
                                        </tr>
                                        @endforeach
                                      </tbody>
                                      </table>  <div class="flex justify-end items-center mt-6">
                                        {{ $hobbies->links('pagination::bootstrap-5') }}
                                    </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                                      
                            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="basic_modal" tabindex="-1" aria-labelledby="basic_modal" aria-hidden="true">
                              <div class="modal-dialog relative w-auto pointer-events-none">
                                  <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                      <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                  
                                          <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                              <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                                                  Create Hobby
                                              </h3>
                                              <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                                                  <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewBox="0 0 20 20">
                                                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                                  </svg>
                                                  <span class="sr-only">Close modal</span>
                                              </button>
                                          </div>
                          
                                       
                                          <div class="p-6 space-y-4">
                                              @if(session('message'))
                                                  <div class="alert alert-success">{{ session('message') }}</div>
                                              @endif
                          
                                              <form action="{{ route('hobbies.store') }}" method="POST">
                                                  @csrf
                          
                                                  <div class="mb-3">
                                                      <label for="hobby" class="form-label">Hobby</label>
                                                      <input type="text" class="form-control" name="hobby" id="hobby" placeholder="Enter hobby" value="{{ old('hobby') }}" />
                                                    @isset($errors)
                                                          @error('hobby')
                                                              <div class="text-danger">{{ $message }}</div>
                                                          @enderror
                                                      @endisset
                                                  </div>
                          
                          
                                                
                                                  <div class="flex items-center justify-end space-x-2 border-t pt-4 border-slate-200 dark:border-slate-600">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                      <button type="submit" class="btn inline-flex justify-center text-white bg-black-500">Create</button>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

@foreach ($hobbies as $hobby)
  
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="edit_modal_{{ $hobby->id }}" tabindex="-1" aria-labelledby="edit_modal_label_{{ $hobby->id }}" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none">
                                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                    
                                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                            <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                                                Edit Hobby
                                            </h3>
                                            <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                        
                                        <!-- Modal Body -->
                                        <div class="p-6 space-y-4">
                                            <form action="{{ route('hobbies.update', $hobby->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                        
                                                <div class="mb-3">
                                                    <label for="hobby_{{ $hobby->id }}" class="form-label">Hobby</label>
                                                    <input type="text" class="form-control" name="hobby" id="hobby_{{ $hobby->id }}" value="{{ $hobby->hobby }}" />
                                                    @error('hobby')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                        
                                             
                        
                                                <!-- Modal Footer -->
                                                <div class="flex items-center justify-end space-x-2 border-t pt-4 border-slate-200 dark:border-slate-600">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn inline-flex justify-center text-white bg-black-500">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                              @endforeach

                      