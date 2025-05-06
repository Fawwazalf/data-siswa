<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SiswaResource;
use App\Models\NISN;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('hobbies')->paginate(10);
        return new SiswaResource(true, 'List Data Siswas', $siswa);
    }
    
    
    public function show($id)
    {
        $siswa = Siswa::with('hobbies')->findOrFail($id);
        return new SiswaResource(true, 'Detail Data Siswa', $siswa);
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
    
        return new SiswaResource(true, 'Siswa berhasil ditambahkan', $siswa->load( 'hobbies'));
        
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
        
        return new SiswaResource(true, 'Siswa berhasil diedit', $siswa->load(relations: 'hobbies'));
    
    }
    
        public function destroy(string $id)
        {
            $siswa = Siswa::findOrFail($id);
            $siswa->delete();
    
            return response()->json([
                'success' => true,
                'message' => 'Siswa berhasil dihapus'
            ], 200);
        }
}
