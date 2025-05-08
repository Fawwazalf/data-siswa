<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use App\Models\NISN;
use App\Models\PhoneNumber;
use App\Models\Siswa;
use Illuminate\Http\Request;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $siswas = Siswa::with(relations: 'nisn')->paginate(10, ['*'], 'siswas_page');
    return view('siswas.index', compact('siswas'));
}



    public function create()
    {
        $hobbies = Hobby::all();
        $phone_numbers = PhoneNumber::all();
        $all_hobbies = Hobby::all();
        return view('siswas.create', compact('hobbies', 'phone_numbers', 'all_hobbies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|unique:siswas,nama|max:255',
            'nisn' => 'required|unique:nisns,nisn|max:255',
            'phone_numbers' => 'nullable|array',
            'phone_numbers.*' => 'nullable|string|max:20|distinct|unique:phone_numbers,phone_number',
            'hobby_ids' => 'nullable|array',
            'hobby_ids.*' => 'required|integer|distinct|exists:hobbies,id',
        ]);
    
       
        $siswa = Siswa::create([
            'nama' => $validated['nama'],
        ]);
    
       
        NISN::create([
            'siswa_id' => $siswa->id,
            'nisn' => $validated['nisn'],
        ]);

        if (!empty($validated['phone_numbers'])) {
            foreach ($validated['phone_numbers'] as $phone) {
                if (!empty($phone)) { 
                    PhoneNumber::create([
                        'siswa_id' => $siswa->id,
                        'phone_number' => $phone,
                    ]);
                }
            }
        }
        
        
    
        
        if (!empty($validated['hobby_ids'])) {
            $siswa->hobbies()->sync($validated['hobby_ids']);
        }
    
        return redirect('/siswas')->with('message', 'Siswa, NISN, Phone Number, dan Hobby berhasil ditambahkan.');
    }
    
    
    /**
     * Update the specified resource in storage.
     */

     public function edit(string $id)
     {
        $siswa = Siswa::with('nisn', 'phone_numbers', 'hobbies')->findOrFail($id);
        $all_hobbies = Hobby::all();
        $siswa_hobbies = Siswa::with('hobbies')->findOrFail($id);
        $siswa_phone_numbers = Siswa::with('phone_numbers')->findOrFail($id);

         return view('siswas.edit', compact('siswa', 'all_hobbies', 'siswa_hobbies', 'siswa_phone_numbers'));
     }

     
     public function update(Request $request, string $id)
     {
         $siswa = Siswa::with(['nisn', 'phone_numbers'])->findOrFail($id);
     
   
         $request->merge([
             'phone_numbers' => collect($request->phone_numbers)->filter()->values()->all()
         ]);
     
         $validated = $request->validate([
             'nama' => 'required|max:255|unique:siswas,nama,' . $siswa->id,
             'nisn' => 'required|max:255|unique:nisns,nisn,' . ($siswa->nisn->id ?? 'NULL'),
             'phone_numbers' => 'nullable|array',
             'phone_numbers.*' => 'nullable|string|max:20|distinct',
             'hobby_ids' => 'array',
             'hobby_ids.*' => 'exists:hobbies,id',
         ]);
     
        
         $nomorExist = PhoneNumber::whereNotIn('id', $siswa->phone_numbers->pluck('id'))
             ->pluck('phone_number')
             ->toArray();
     
         
         foreach ($validated['phone_numbers'] ?? [] as $nomor) {
             if (in_array($nomor, $nomorExist)) {
                 return back()->withErrors(['phone_numbers' => "Nomor telepon $nomor sudah digunakan oleh siswa lain."])->withInput();
             }
         }
     
        
         $siswa->hobbies()->sync($validated['hobby_ids'] ?? []);
     
      
         $siswa->update([
             'nama' => $validated['nama'],
         ]);
     
         if ($siswa->nisn) {
             $siswa->nisn->update([
                 'nisn' => $validated['nisn'],
             ]);
         } else {
             NISN::create([
                 'siswa_id' => $siswa->id,
                 'nisn' => $validated['nisn'],
             ]);
         }
     
     
         $siswa->phone_numbers()->delete();
     
         
         foreach ($validated['phone_numbers'] ?? [] as $phone) {
             PhoneNumber::create([
                 'siswa_id' => $siswa->id,
                 'phone_number' => $phone,
             ]);
         }
     
         return redirect('/siswas')->with('message', 'Siswa dan NISN berhasil diperbarui.');
     }
     

    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect('/siswas')->with('message', 'Siswa deleted successfully.');
    }
}
