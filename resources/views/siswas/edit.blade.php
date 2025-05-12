
@extends('layouts.app')


@section('section')


        <div class="card shadow p-4">
            <h2 class="mb-4">Edit Siswa</h2>

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
                        value="{{ old('nama', $siswa->nama) }}"
                    />
                   @isset($errors)
    @error('nama')
        <div class="text-danger">{{ $message }}</div>
    @enderror
@endisset

                </div>

                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nisn"
                        id="nisn"
                        placeholder="Enter nisn"
                        value="{{ old('nisn', $siswa->nisn->nisn ?? '') }}"
                    />
                  @isset($errors)
    @error('nisn')
        <div class="text-danger">{{ $message }}</div>
    @enderror
@endisset

                </div>
                <div class="mb-3 input-area">
                    <label class="form-label">Phone Numbers</label>
                    <div class="mb-3 input-area">
                     
                        <div class="input-group-hp mb-2 w-full flex">
                            <input type="text" id="new-phone-number" class="form-control" placeholder="Enter phone number">
                            <button type="button" class="btn btn-success" id="add-phone-number">+</button>
                        </div>
                    
                  
                        <div id="phone-numbers-wrapper">
                            @forelse(old('phone_numbers', $siswa->phone_numbers->pluck('phone_number')->toArray()) as $phone)
                            <div class="input-group-hp mb-2 w-full flex">
                                    <input type="text" name="phone_numbers[]" class="form-control" value="{{ $phone }}" placeholder="Enter phone number" required>
                                    <button type="button" class="btn btn-danger remove-phone-number">x</button>
                                </div>
                            @empty
                               
                            @endforelse
                        </div>
                    
                       
                    </div>
                    
                   @isset($errors)
    @error('phone_numbers')
        <div class="text-danger">{{ $message }}</div>
    @enderror
@endisset

                </div>
                
                <div class="mb-3 checkbox-area">
                    <label class="form-label block mb-2">Hobi</label>
        @foreach($all_hobbies as $hobby)
        <label class="inline-flex items-center cursor-pointer mb-2 mr-4">
                <input
                     type="checkbox"
                            class="hidden"
                    name="hobby_ids[]"
                    value="{{ $hobby->id }}"
                    id="hobby_{{ $hobby->id }}"
                    {{ in_array($hobby->id, $siswa_hobbies->hobbies->pluck('id')->toArray()) ? 'checked' : '' }}
                >
                <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset('assets/images/icon/ck-white.svg') }}" alt="" class="h-[10px] w-[10px] block m-auto opacity-0">
                </span>
                <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">
                    {{ $hobby->hobby }}
                </span>
            </label>
        @endforeach
    </div>
                

                <button type="submit"class="bg-white hover:bg-opacity-80 text-slate-900 text-sm font-Inter rounded-md w-max block py-2 font-medium px-4">Update</button>
            </form>
        </div>
        @endsection

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
              @section('script')  
           document.addEventListener('DOMContentLoaded', function () {
    const addBtn = document.getElementById('add-phone-number');
    const newInput = document.getElementById('new-phone-number');
    const wrapper = document.getElementById('phone-numbers-wrapper');

    addBtn.addEventListener('click', function () {
        const value = newInput.value.trim();
        if (!value) return;

        const newGroup = document.createElement('div');
        newGroup.className = 'input-group-hp';
        newGroup.innerHTML = `
            <input type="text" name="phone_numbers[]" class="form-control" value="${value}" placeholder="Enter phone number" required>
            <button type="button" class="btn btn-danger remove-phone-number">x</button>
        `;

        wrapper.appendChild(newGroup);
        newInput.value = '';
    });

    wrapper.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-phone-number')) {
            e.target.parentElement.remove();
        }
    });
});
@endsection

            </script>
            
    </body>
</html>
