
@extends('layouts.app')


@section('section')

    <div class="card shadow p-4">
        <h2 class="mb-4">Create Siswa</h2>

        @if(session('message'))
        <div class="alert alert-success">{{ session("message") }}</div>
        @endif

        <form action="{{ route('siswas.store') }}" method="post">
            @csrf

            <div class="mb-3 input-area">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter nama" value="{{ old('nama') }}" />
                @isset($errors)
    @error('nama')
        <div class="text-danger">{{ $message }}</div>
    @enderror
@endisset

            </div>

            <div class="mb-3 input-area">
                <label for="nisn" class="form-label">NISN</label>
                <input type="number" min="0" step="1" class="form-control" name="nisn" id="nisn" placeholder="Enter nisn" value="{{ old('nisn') }}" />

               @isset($errors)
    @error('nisn')
        <div class="text-danger">{{ $message }}</div>
    @enderror
@endisset

            </div>

            {{-- <div class="mb-3 input-area">
                <label for="phone_numbers" class="form-label">Phone Numbers</label>
                <select name="phone_numbers[]" id="phone_numbers" class="form-control select2" multiple="multiple">
                    @foreach ($phone_numbers as $phone_number)
                    <option 
                        value="{{ $phone_number->id }}" 
                       
                    >
                        {{ $phone_number->phone_number }}
                    </option>
                @endforeach
                </select>
                @error('phone_numbers')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> --}}

            <div class="mb-3 input-area">
                <label class="form-label">Phone Numbers</label>
                <div id="phone-numbers-wrapper">
    @php $oldPhones = old('phone_numbers', []); @endphp
    @if (count($oldPhones))
        @foreach ($oldPhones as $i => $phone)
            <div class="input-group-hp mb-2 w-full flex">
                <input type="text" name="phone_numbers[]" class="form-control" value="{{ $phone }}" placeholder="Enter phone number">
                @if ($loop->first)
                    <button type="button" class="btn btn-success add-phone-number">+</button>
                @else
                    <button type="button" class="btn btn-danger remove-phone-number">×</button>
                @endif
            </div>
        @endforeach
    @else
        <div class="input-group-hp mb-2 w-full flex">
            <input type="text" name="phone_numbers[]" class="form-control" placeholder="Enter phone number">
            <button type="button" class="btn btn-success add-phone-number">+</button>
        </div>
    @endif
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
                            {{ in_array($hobby->id, old('hobby_ids', [])) ? 'checked' : '' }}
                        >
                        <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                            <img src="{{ asset('assets/images/icon/ck-white.svg') }}" alt="" class="h-[10px] w-[10px] block m-auto opacity-0">
                        </span>
                        <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">
                            {{ $hobby->hobby }}
                        </span>
                    </label>
                @endforeach
            
               @isset($errors)
    @error('hobby_ids')
        <div class="text-danger">{{ $message }}</div>
    @enderror
@endisset

            </div>
            

            <button type="submit" class="bg-white hover:bg-opacity-80 text-slate-900 text-sm font-Inter rounded-md w-max block py-2 font-medium px-4">Create</button>
        </form>
    </div>

    @endsection

    
    <script>
        @section('script')  
        // $(document).ready(function () {
        //     $('.select2').select2({
        //         tags: true,
        //         tokenSeparators: [',']
        //     });
        // });

        document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.getElementById('phone-numbers-wrapper');

    wrapper.addEventListener('click', function (e) {
        if (e.target.classList.contains('add-phone-number')) {
            const currentGroup = e.target.closest('.input-group-hp');
            const currentInput = currentGroup.querySelector('input');
            const currentValue = currentInput.value.trim();

            if (!currentValue) return; 

         
            const newGroup = document.createElement('div');
            newGroup.className = 'input-group-hp mb-2 flex ';
            newGroup.innerHTML = `
                <input type="text" name="phone_numbers[]" class="form-control" value="${currentValue}" placeholder="Enter phone number" >
                <button type="button" class="btn btn-danger remove-phone-number">×</button>
            `;

         
            currentGroup.insertAdjacentElement('afterend', newGroup);

          
            currentInput.value = '';
        }

        if (e.target.classList.contains('remove-phone-number')) {
            e.target.parentElement.remove();
        }
    });
});
        
//         document.addEventListener('DOMContentLoaded', function () {
//     const wrapper = document.getElementById('phone-numbers-wrapper');

//     wrapper.addEventListener('click', function (e) {
//         if (e.target.classList.contains('add-phone-number')) {
//             const inputGroup = document.createElement('div');
//             inputGroup.className = 'input-group mb-2';
//             inputGroup.innerHTML = `
//                 <input type="text" name="phone_numbers[]" class="form-control" placeholder="Enter phone number" required>
//                 <button type="button" class="btn btn-danger remove-phone-number">x</button>
//             `;
//             wrapper.appendChild(inputGroup);
//         } else if (e.target.classList.contains('remove-phone-number')) {
//             e.target.parentElement.remove();
//         }
//     });
// });
@endsection
    </script>
    
