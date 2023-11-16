<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lặp 10 lần để chèn 10 giá trị không trùng nhau
        for ($i = 1; $i <= 11; $i++) {
            // Tạo tên tầng mới
            $tenTang = $i;

            // Kiểm tra xem giá trị đã tồn tại trong cơ sở dữ liệu hay chưa
            $existingRecord = DB::table('tang')->where('ten_tang', $tenTang)->first();

            // Nếu giá trị không tồn tại, thêm vào cơ sở dữ liệu
            if (!$existingRecord) {
                DB::table('tang')->insert([
                    'ten_tang' => $tenTang,
                    'id_toa_nha'=> ranD(1,3),
                ]);
            }
        }

    }
}
