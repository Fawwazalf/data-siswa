<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NISNResource;
use App\Models\NISN;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NISNController extends Controller
{
    public function index()
    {
        $nisns = NISN::with('siswa')->paginate(10);
        
        return new NISNResource(true, 'List data nisn', $nisns);
    }

    public function show(string $id)
    {
        $nisn = NISN::with('siswa')->findOrFail($id);
        return new NISNResource(true, 'Detail data nisn', $nisn);
    }
    
    public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|unique:siswas,nama|max:255',
        'nisn' => 'required|unique:nisns,nisn|max:255',
    ]);

    
    $siswa = Siswa::create([
        'nama' => $validated['nama'],
        'phone_number' => null
    ]);

    
    NISN::create([
        'siswa_id' => $siswa->id,
        'nisn' => $validated['nisn'],
    ]);


    return new NISNResource(true, 'Siswa berhasil ditambahkan', $siswa->load('nisn'));
}


   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
{
    $siswa = Siswa::with('nisn')->findOrFail($id);

    $validated = $request->validate([
        'nama' => 'required|max:255|unique:siswas,nama,' . $siswa->id,
        'nisn' => 'required|max:255|unique:nisns,nisn,' . ($siswa->nisn->id ?? 'NULL'),
    ]);

    
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

    return new NISNResource(true, 'Siswa berhasil ditambahkan', $siswa->load('nisn'));
}



    public function destroy(string $id)
    {
        $nisn = NISN::findOrFail($id);
        $nisn->delete();
        return response()->json([
            'success' => true,
            'message' => 'NISN berhasil dihapus'
        ]);
        
    }
}
