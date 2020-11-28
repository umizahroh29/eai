<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouse')->insert([
            'id_karyawan' => 1,
            'lokasi' => 'Bandung',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
