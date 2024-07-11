<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // untuk mengisi dummy data pada tabel 'daftar'
        DB::table('daftar')->insert([
            'nama' => 'Zaky',
            'email' => 'contoh@email.com',
            'no_hp' => '123456789',
            'semester' => 3,
            'ipk' => 3.5,
            'pilihanbeasiswa' => 'Beasiswa Contoh',
            'berkas' => 'nama_berkas.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
