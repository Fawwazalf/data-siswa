<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use App\Models\NISN;
use App\Models\PhoneNumber;
use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $siswas = Siswa::with(relations: 'nisn')->paginate(10, ['*'], 'siswas_page');
        $nisns = NISN::with('siswa')->paginate(10, ['*'], 'nisns_page');
        $phone_numbers = PhoneNumber::with('siswa')->paginate(10, ['*'], 'phone_numbers_page');
        $hobbies = Hobby::with('siswas')->paginate(10, ['*'], 'hobbies_page');

        return view('index', compact('siswas', 'nisns', 'phone_numbers', 'hobbies'));
    }
}
