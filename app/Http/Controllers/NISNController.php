<?php

namespace App\Http\Controllers;

use App\Models\NISN;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NISNController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $nisns = NISN::with('siswa')->paginate(10);
        return view('nisns.index', compact('nisns'));
    }

    public function create()
    {
        return view('nisns.create');
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


        return redirect('/nisns')->with('message', 'Siswa dan NISN berhasil ditambahkan.');
    }

    public function show(string $nisn)
    {
        return view('nisn.show', compact('nisn'));
    }

    public function edit(string $id)
    {
        $siswa = Siswa::with('nisn')->findOrFail($id);
        return view('nisns.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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

        return redirect('/nisns')->with('message', 'Siswa dan NISN berhasil diperbarui.');
    }



    public function destroy(string $id)
    {
        $nisn = NISN::findOrFail($id);
        $nisn->delete();
        return redirect('/nisns')->with('message', 'NISN berhasil dihapus');
    }
}
