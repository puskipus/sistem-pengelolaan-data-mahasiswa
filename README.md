### Nama          : Thoriq Achmad Ramadhan 
### Universitas   : Universitas Brawijaya
### Asal          : Kota Malang

# Website Sistem Pengelolaan Data Mahasiswa
Dibuat menggunakan Laravel & MySQL

## Fitur
### 1. Menambah Data Mahasiswa
Fitur ini digunakan untuk menambahkan data baru Mahasiswa. Fitur ini dapat digunakan dengan menekan tombol "+ Tambah Mahasiswa", kemudian isi seluruh field yang ada sesuai dengan data mahasiswa yang ingin ditambahkan. Pastikan seluruh data sudah terisi dengan benar, kemudian tekan tombol "SIMPAN" untuk menambahkan data baru. Terdapat tombol "back" untuk kembali ke menu utama.

### 2. Mengedit Data Mahasiswa
Fitur ini digunakan untuk memperbarui data Mahasiswa. Fitur ini dapat digunakan dengan menekan tombol "Update" pada data Mahasiswa yang ingin diubah. Isi field yang ingin diubah sesuai dengan kebutuhan. Pastikan seluruh data baru sudah terisi dengan benar, kemudian tekan tombol "SIMPAN" untuk mengubah data Mahasiswa. Terdapat tombol "back" untuk kembali ke menu utama.

### 3. Menghapus Data Mahasiswa
Fitur ini digunakan untuk menghapus data Mahasiswa. Pilih data Mahasiswa yang ingin dihapus, kemudian tekan tombol "Delete" untuk menghapus. 

### 4. Cari Data Mahasiswa
Fitur ini digunakan untuk mencari data mahasiswa berdasarkan nama atau prodi. Akses fitur ini dengan menekan dan mengisi field yang ada di atas dengan keterangan "Cari Nama Mahasiswa atau Prodi". Setelah mengisi field sesuai dengan data yang ingin dicari tekan tombol "Cari" untuk mencari data Mahasiswa.

### 4. Mengurutkan Data Mahasiswa
Fitur ini digunakan untuk mengurutkan data mahasiswa berdasarkan kolom tertentu. Akses fitur ini dengan menekan header tabel sesuai dengan kolom yang ingin diurutkan. Pengurutan dapat dilakukan secara menaik(ascending) atau menurun(descending).

## Proses Instalasi
nb: Lakukan perintah di dalam tanda petik dua("") tanpa memasukkan tanda petiknya.

- Buka folder di file manager kemudian buka terminal. 
- Tuliskan syntax "git clone https://github.com/puskipus/sistem-pengelolaan-data-mahasiswa.git", tunggu proses cloning selesai. 
- Buka file di text editor. 
- Buka file .env dan ubah konfigurasi sesuai database Anda. Pastikan sebelumnya sudah membuat database terlebih dahulu.
- Lakukan migrasi database dengan syntax "php artisan migrate", tunggu proses selesai.
- Jalankan laravel dengan syntax "php artisan serve", buka url hasil run di browser.
