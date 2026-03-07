<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    for ($i = 1; $i <= 15; $i++) {
        DB::table('m_barang')->insert([
            'kategori_id' => rand(1,5),
            'supplier_id' => ceil($i/5),
            'barang_kode' => 'BRG'.$i,
            'barang_nama' => 'Barang '.$i,
            'harga_beli' => 1000*$i,
            'harga_jual' => 1200*$i
        ]);
    }
}
}