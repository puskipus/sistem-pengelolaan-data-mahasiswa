<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class updateMahasiswa extends Controller
{
    public function __invoke(Request $request, Mahasiswa $mahasiswa)
    {
        return view('update', [
            'mahasiswa' => $mahasiswa,
        ]);
    }
}
