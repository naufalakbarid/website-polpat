<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Data Ekskul
        $ekskul = \App\Models\Ekskul::create([
            'nama_ekskul' => 'Pramuka',
            'deskripsi' => 'Ekstrakurikuler wajib pembentuk karakter.'
        ]);

        // 2. Akun Super Admin
        $admin = \App\Models\User::create([
            'name' => 'Super Admin Polpat',
            'email' => 'admin@polpat.sch.id', 
            'password' => bcrypt('password123'),
            'role' => 'super_admin',
            'ekskul_id' => null
        ]);

        // 3. Data Info Juara
        \App\Models\Berita::create([
            'judul' => 'Juara 1 Olimpiade Matematika Nasional',
            'konten' => 'Siswa SD Polisi 4 berhasil meraih medali emas di Jakarta.',
            'kategori' => 'Prestasi',
            'user_id' => $admin->id
        ]);
    
        \App\Models\Berita::create([
            'judul' => 'Juara 2 Lomba Tari Tradisional',
            'konten' => 'Tim kesenian memukau juri di tingkat provinsi.',
            'kategori' => 'Prestasi',
            'user_id' => $admin->id
        ]);
    }
}
