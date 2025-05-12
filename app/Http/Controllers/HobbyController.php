<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use App\Models\Siswa;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbies = Hobby::with('siswas')->paginate(10, ['*'], 'hobbies_page');
    
       return view('hobbies.index', compact('hobbies'));
    }

    public function create()
    {
        return view('hobbies.create');
    }

    public function store(Request $request)
    {
        
            $validated = $request->validate([
                'hobby' => 'required|string|max:255',
                 
            ]);
    
            
         
    
            $hobby = Hobby::firstOrCreate([
                'hobby' => $validated['hobby'],
            ]);
    
           
       
           

    
          
            return redirect('/hobbies')->with('message', 'Siswa dan Hobby berhasil ditambahkan.');
        
    }

    public function edit(string $id)
    { 
        $hobby = Hobby::with('siswas')->findOrFail($id);
      
        return view('hobbies.edit', compact('siswas', 'all_siswas','hobby'));
    }

    public function update(Request $request, string $id)
{
    $hobby = Hobby::with('siswas')->findOrFail($id);

    $validated = $request->validate([
        'hobby' => 'required|string|max:255|unique:hobbies,hobby,' . $hobby->id,
       
    ]);

    $hobby->update([
        'hobby' => $validated['hobby']
    ]);



    return redirect('/hobbies')->with('message', 'Siswa dan Hobby berhasil diperbarui.');
}


    public function destroy(string $id)
    {$hobby = Hobby::findOrFail($id);
        $hobby->delete();

        return redirect()->route('hobbies.index')->with('success', 'Hobi berhasil dihapus.');
    }
}
