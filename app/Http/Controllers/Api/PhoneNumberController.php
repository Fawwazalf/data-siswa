<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PhoneNumberResource;
use App\Models\PhoneNumber;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PhoneNumberController extends Controller
{
    public function index()
    {
        $phone_numbers = PhoneNumber::with('siswa')->paginate(10);
        return new PhoneNumberResource(true, 'List Data Phone Numbers', $phone_numbers);
    }
    public function show(string $id)
    {
        $phone_number = PhoneNumber::with('siswa')->findOrFail(id: $id);
        return new PhoneNumberResource(true, 'Detail data phone number', $phone_number);
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
        return new PhoneNumberResource(true, 'Phone number berhasil ditambahkan', $siswa->load('phone_numbers'));
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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

        return new PhoneNumberResource(true, 'Phone number berhasil diedit', $siswa->load('phone_numbers'));
    }



    public function destroy(string $id)
    {
        $phone_number = PhoneNumber::findOrFail($id);
        $phone_number->delete();

        return response()->json([
            'success' => true,
            'message' => 'Phone number berhasil dihapus'
        ], 200);
    }
}
