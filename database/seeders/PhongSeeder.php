<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tang = DB::table('tang')->where('id_tang', '!=', 1)->orWhere('id_tang', '!=', 2)->get();
        $ca = DB::table('ca_hoc')->where('loai_ca_hoc', 1)->get();
        $buoi = DB::table('ca_hoc')->where('loai_ca_hoc', 2)->get();

        foreach ($buoi as $b) {
            DB::table('phong')->insert([
                [
                    'ten_phong' => 'Xưởng thực hành bộ môn CNTT', 
                    'id_loai_phong' => 3, 
                    'id_co_so' => 1, 
                    'id_tang' => 1, 
                    'id_toa_nha' => 1,
                    'id_ca_hoc' => $b->id_ca_hoc, 
                    'created_at' => Now(), 
                    'updated_at' => Now(),
                ],
    
                [
                    'ten_phong' => 'Hội trường', 
                    'id_loai_phong' => 2, 
                    'id_co_so' => 1, 
                    'id_tang' => 2, 
                    'id_toa_nha' => 2, 
                    'id_ca_hoc' => $b->id_ca_hoc, 
                    'created_at' => Now(), 
                    'updated_at' => Now(),
                ],
            ]);
        }

        foreach ($tang as $t) {
            foreach ($ca as $c) {
                for ($i = 1; $i <= 25; $i++) {
                    if ($i < 10) {
                        DB::table('phong')->insert([
                            [
                                'ten_phong' => '0'.$i, 
                                'id_loai_phong' => 1, 
                                'id_co_so' => 1, 
                                'id_tang' => $t->id_tang, 
                                'id_toa_nha' => 3, 
                                'id_ca_hoc' => $c->id_ca_hoc, 
                                'created_at' => Now(), 
                                'updated_at' => Now(),
                            ],
                        ]);
                    } else {
                        DB::table('phong')->insert([
                            [
                                'ten_phong' => $i, 
                                'id_loai_phong' => 1, 
                                'id_co_so' => 1, 
                                'id_tang' => $t->id_tang, 
                                'id_toa_nha' => 3, 
                                'id_ca_hoc' => $c->id_ca_hoc, 
                                'created_at' => Now(), 
                                'updated_at' => Now(),
                            ],
                        ]);
                    }
                }
            }
        }
    }
}
