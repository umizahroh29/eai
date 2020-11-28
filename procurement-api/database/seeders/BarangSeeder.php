<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            'id_vendor' => 1,
            'id_rak' => 1,
            'nama' => 'Polo Belang Belang',
            'tipe' => 'Polo',
            'kuantitas' => 211,
            'harga' => 30000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
