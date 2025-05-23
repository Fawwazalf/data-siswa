<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HobbyResource;
use App\Models\Hobby;
use App\Models\Siswa;
use Illuminate\Http\Request;

use function Laravel\Prompts\note;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbies = Hobby::with('siswas')->get()->sortBy('hobby');
        return new HobbyResource(true, 'List Data Hobbies', $hobbies);
    }

    public function show($id)
    {
        $hobby = Hobby::with('siswas')->findOrFail($id);
        return new HobbyResource(true, 'Detail Data Hobby', $hobby);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'hobby' => 'required|string|max:255',
            'nama' => 'string|max:255',
        ]);
        $hobby = Hobby::firstOrCreate([
            'hobby' => $validated['hobby'],
        ]);

        if (!empty($validated['nama'])) {
            $siswa = Siswa::firstOrCreate([
                'nama' => $validated['nama'],
            ]);

            $siswa->hobbies()->syncWithoutDetaching($hobby->id);
        }

        return new HobbyResource(true, 'Siswa dan Hobby berhasil ditambahkan', $hobby->load('siswas'));
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

        return new HobbyResource(true, 'Siswa dan Hobby berhasil diperbarui', $hobby->load('siswas'));
    }

    public function destroy(Hobby $hobby)
    {
        $hobby->delete();

        return response()->json([
            'success' => true,
            'message' => 'Hobby berhasil dihapus'
        ], 200);
    }
}
