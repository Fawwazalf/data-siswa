<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use App\Models\Siswa;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
       return redirect('/');
    }

    public function create()
    {
        return view('hobbies.create');
    }

    public function store(Request $request)
    {
        
            // Validasi input
            $validated = $request->validate([
                'hobby' => 'required|string|max:255',
                'nama' => 'required|string|max:255', 
            ]);
    
            
            $siswa = Siswa::firstOrCreate([
                'nama' => $validated['nama'], 
            ]);
    
            $hobby = Hobby::firstOrCreate([
                'hobby' => $validated['hobby'],
            ]);
    
           
       
            $siswa->hobbies()->syncWithoutDetaching($hobby->id);

    
          
            return redirect('/')->with('message', 'Siswa dan Hobby berhasil ditambahkan.');
        
    }

    public function edit(string $id)
    { 
        $hobby = Hobby::with('siswas')->findOrFail($id);
        $siswas = $hobby->siswa;
        $all_siswas = Siswa::all();
        return view('hobbies.edit', compact('siswas', 'all_siswas','hobby'));
    }

    public function update(Request $request, string $id)
{
    $hobby = Hobby::with('siswas')->findOrFail($id);

    $validated = $request->validate([
        'hobby' => 'required|string|max:255|unique:hobbies,hobby,' . $hobby->id,
        'siswa_ids' => 'array',
        'siswa_ids.*' => 'exists:siswas,id',
    ]);

    $hobby->update([
        'hobby' => $validated['hobby']
    ]);

    $hobby->siswas()->sync($request->siswa_ids ?? []);

    return redirect('/')->with('message', 'Siswa dan Hobby berhasil diperbarui.');
}


    public function destroy(Hobby $hobby)
    {
        $hobby->delete();

        return redirect()->route('hobbies.index')->with('success', 'Hobi berhasil dihapus.');
    }
}
