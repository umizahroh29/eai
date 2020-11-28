<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RakPenyimpananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rak_penyimpanan')->insert([
            'id_warehouse' => 1,
            'tipe_rak' => 'A21',
            'jumlah_barang' => 211,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
