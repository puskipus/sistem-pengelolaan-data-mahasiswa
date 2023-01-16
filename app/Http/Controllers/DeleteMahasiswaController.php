<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DeleteMahasiswaController extends Controller
{
    public function __invoke(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect('/dashboard');
    }
}
