<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendor')->insert([
            'nama' => 'Vendorku',
            'tipe_barang' => 'Polo',
            'alamat' => 'Bandung',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
