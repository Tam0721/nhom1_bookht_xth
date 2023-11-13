<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class them_toa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('toa_nha')->insert([
            ['ten_toa_nha' => 'Tòa nhà F','id_co_so'=>'2'],
            ['ten_toa_nha' => 'Tòa nhà P', 'id_co_so' => '2'],
            ['ten_toa_nha' => 'Tòa nhà T', 'id_co_so' => '2'],
        ]);
    }
}
