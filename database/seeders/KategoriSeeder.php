<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            ['kategori_kode' => 'K01', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'K02', 'kategori_nama' => 'Minuman'],
            ['kategori_kode' => 'K03', 'kategori_nama' => 'Snack'],
            ['kategori_kode' => 'K04', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'K05', 'kategori_nama' => 'ATK']
        ]);
    }
}
