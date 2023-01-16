<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class storeNewMahasiswa extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'nim' => ['required'],
            'nama' => ['required'],
            'prodi' => ['required'],
            'semester' => ['required'],
            'kelas' => ['required'],
            'angkatan' => ['required'],
        ]);

        Mahasiswa::create($data);

        return redirect()->back()->with('success', 'Mahasiswa baru telah ditambahkan');
    }
}
