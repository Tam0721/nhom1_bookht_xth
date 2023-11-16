<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaHocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Thời gian bắt đầu của ca đầu tiên (7:15 AM)
        $startHour = 7;
        $startMinute = 15;

        for ($i = 1; $i <= 6; $i++) {
            // Tạo tên ca mới
            $tenca = 'Ca ' . $i;

            // Thời gian bắt đầu của ca hiện tại
            $startTime = sprintf("%02d:%02d", $startHour, $startMinute);

            // Cộng thêm 2 giờ (120 phút) vào thời gian bắt đầu để lấy thời gian kết thúc của ca hiện tại
            $endHour = $startHour + 2;
            $endMinute = $startMinute;
            $endTime = sprintf("%02d:%02d", $endHour, $endMinute);

            // Kiểm tra xem giá trị đã tồn tại trong cơ sở dữ liệu hay chưa
            $existingRecord = DB::table('ca_hoc')->where('ten_ca_hoc', $tenca)->first();

            // Nếu giá trị không tồn tại, thêm vào cơ sở dữ liệu
            if (!$existingRecord) {
                DB::table('ca_hoc')->insert([
                    'ten_ca_hoc' => $tenca,
                    'loai_ca_hoc' => rand(0, 1),
                    'thoi_gian_bat_dau' => $startTime,
                    'thoi_gian_ket_thuc' => $endTime,
                ]);
            }

            // Cập nhật giờ bắt đầu cho ca tiếp theo (ít nhất 10 phút sau giờ kết thúc của ca trước đó)
            if ($i == 2) {
                // Nếu là ca thứ 2, thì chuyển sang ca thứ 3 (12 giờ)
                $startHour = 12;
                $startMinute = 0;
            } else {
                // Nếu không phải là ca thứ 2, thì chuyển sang ca tiếp theo (ít nhất 10 phút sau giờ kết thúc của ca trước đó)
                $startHour = $endHour;
                $startMinute = $endMinute + 10;
            }

            // Nếu số phút vượt quá 60, chuyển sang giờ tiếp theo và giảm đi 60 phút
            if ($startMinute >= 60) {
                $startHour += 1;
                $startMinute -= 60;
            }
        }
    }
}
