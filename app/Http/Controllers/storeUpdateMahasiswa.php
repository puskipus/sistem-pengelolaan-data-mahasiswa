<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class storeUpdateMahasiswa extends Controller
{
    public function __invoke(Request $request, Mahasiswa $mahasiswa)
    {
        $data = $request->validate([
            'nim' => ['required'],
            'nama' => ['required'],
            'prodi' => ['required'],
            'semester' => ['required'],
            'kelas' => ['required'],
            'angkatan' => ['required'],
        ]);

        $id = Mahasiswa::findOrFail($mahasiswa->id);

        date_default_timezone_set('Asia/Jakarta');
        $data['updated_at'] = date('Y-m-d h:i:s A');

        $id->update($data);


        return redirect()->back();

    }
}
