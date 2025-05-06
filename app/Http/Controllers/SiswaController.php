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
    return Siswa::with('hobbies')->get();
}



    public function create()
    {
        return view('siswas.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|unique:siswas,nama|max:255',
        'nisn' => 'required|unique:nisns,nisn|max:255',
    ]);

    
    $siswa = Siswa::create([
        'nama' => $validated['nama'],
    ]);

    
    NISN::create([
        'siswa_id' => $siswa->id,
        'nisn' => $validated['nisn'],
    ]);

    return redirect('/')->with('message', 'Siswa dan NISN berhasil ditambahkan.');
}
public function edit( string $id)
{
    $siswa_hobbies = Siswa::with('hobbies')->findOrFail($id);
    $all_hobbies = Hobby::all();
   
    $siswa = Siswa::with('nisn')->findOrFail($id);
    return view('siswas.edit', compact('siswa','all_hobbies', 'siswa_hobbies' ));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
{

    
    $siswa = Siswa::with('nisn')->findOrFail($id);
    $siswa_hobbies = Siswa::with('hobbies')->findOrFail($id);

    $validated = $request->validate([
        'nama' => 'required|max:255|unique:siswas,nama,' . $siswa->id,
        'nisn' => 'required|max:255|unique:nisns,nisn,' . ($siswa->nisn->id ?? 'NULL'),
        'hobby_ids' => 'array',
        'hobby_ids.*' => 'exists:hobbies,id',
    ]);
 
    
    $siswa_hobbies->hobbies()->sync($request->hobby_ids ?? []);

    
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

    return redirect('/')->with('message', 'Siswa dan NISN berhasil diperbarui.');
    
}

    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect('/')->with('message', 'Siswa deleted successfully.');
    }
}
