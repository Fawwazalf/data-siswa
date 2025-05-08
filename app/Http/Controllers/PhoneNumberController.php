<?php

namespace App\Http\Controllers;

use App\Models\PhoneNumber;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PhoneNumberController extends Controller
{
    
    public function index()
    {
        $phone_numbers = PhoneNumber::with('siswa')->paginate(10);
        return view('phone_numbers.index', compact('phone_numbers'));
    }

    public function create()
    {
        return view('phone_numbers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'phone_number' => 'required|unique:phone_numbers,phone_number|max:20',
        ]);
    
       
        $siswa = Siswa::where('nama', $validated['nama'])->first();

       
        if (!$siswa) {
            $siswa = Siswa::create([
                'nama' => $validated['nama'],
            ]);
        }
    
        
        PhoneNumber::create([
            'phone_number' => $validated['phone_number'],
            'siswa_id' => $siswa->id,
        ]);
    
        return redirect('/phone_numbers')->with('message', ' berhasil ditambahkan.');
    }
    

    public function show(string $phone_number)
    {
        return view('phone_number.show', compact('phone_number'));
    }

    public function edit(string $id)
{
    $phone_number = PhoneNumber::with('siswa')->findOrFail($id);
    $siswa = $phone_number->siswa;
    return view('phone_numbers.edit', compact('siswa', 'phone_number'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
{
    $phone_number = PhoneNumber::with('siswa')->findOrFail($id);
    $siswa = $phone_number->siswa;

    $validated = $request->validate([
        'nama' => 'required|max:255|unique:siswas,nama,' . $siswa->id,
        'phone_number' => 'required|max:220|unique:phone_numbers,phone_number,' . $phone_number->id,
    ]);
    
    $siswa->update([
        'nama' => $validated['nama'],
    ]);

    
    $phone_number->update([
        'phone_number' => $validated['phone_number'],
    ]);


    return redirect('/phone_numbers')->with('message', 'Siswa dan Phone Number berhasil diperbarui.');
}



    public function destroy(string $id)
    {
        $phone_number = PhoneNumber::findOrFail($id);
        $phone_number->delete();
        return redirect('/phone_numbers')->with('message', 'Phone Number berhasil dihapus');
    }
}
