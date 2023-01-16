<x-app-layout>
    <x-slot name="header"></x-slot>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      </head>
      <body class="bg-light">
        <main class="container">

            <!-- START DATA -->
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <!-- FORM PENCARIAN -->
                    <div class="pb-3">
                      <form class="d-flex" action="" method="get">
                          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                          <button class="btn btn-secondary" type="submit">Cari</button>
                      </form>
                    </div>

                    <!-- TOMBOL TAMBAH DATA -->
                    <div class="pb-3">
                      <a href='{{ url("/tambah") }}' class="btn btn-primary">+ Tambah Data</a>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="col-md-1">No</th>
                                <th class="col-md-3">NIM</th>
                                <th class="col-md-4">Nama</th>
                                <th class="col-md-2">Prodi</th>
                                <th class="col-md-2">Semester</th>
                                <th class="col-md-2">Kelas</th>
                                <th class="col-md-2">Angkatan</th>
                                <th class="col-md-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswas as $key=>$mahasiswa)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $mahasiswa->nim }}</td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>{{ $mahasiswa->prodi }}</td>
                                    <td>{{ $mahasiswa->semester }}</td>
                                    <td>{{ $mahasiswa->kelas }}</td>
                                    <td>{{ $mahasiswa->angkatan }}</td>
                                    <td>
                                        <a href='' class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ url('/delete', $mahasiswa) }}"  method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input placeholder="DELET" type="submit" value="Delete" class="btn btn-danger btn-sm">
                                        </form>
                                        {{-- <a href='{{ url("/delete", $mahasiswa) }}' class="btn btn-danger btn-sm">Del</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

              </div>
              <!-- AKHIR DATA -->
        </main>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>


