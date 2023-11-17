<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\booking;
use App\Models\Phong;
use App\Models\Coso;
use App\Models\Tang;
use App\Models\Toa;

class CalendarController extends Controller
{
    public function home()
    {
        // Lấy ngày hiện tại
        $currentDate = Carbon::now();

        // Tính ngày đầu tiên của tuần hiện tại
        $firstDayOfWeek = $currentDate->startOfWeek();

        // Tạo mảng chứa các ngày trong tuần
        $calendar = [];

        // Lặp qua từng ngày trong tuần
        for ($day = 0; $day < 7; $day++) {
            $date = $firstDayOfWeek->copy()->addDays($day);

            // Thêm thông tin về ngày vào mảng lịch
            $calendar[] = [
                'date' => $date->toDateString(),
                'day' => $date->day,
                'time' =>  date('Y-m-d',strtotime($date))
            ];
            
        }
    
        $phong = Phong::select('phong.*','toa_nha.ten_toa_nha','loai_phong.ten_loai_phong','tang.ten_tang','co_so.ten_co_so')
        ->join('loai_phong','loai_phong.id_loai_phong','phong.id_loai_phong')
        ->join('toa_nha','toa_nha.id_toa_nha','phong.id_toa_nha')
        ->join('tang','tang.id_tang','phong.id_tang')
        ->join('co_so','co_so.id_co_so','phong.id_co_so')
        ->where('tang.id_tang',8)
        ->limit(10)
        ->get();
        // dd($phong);

        return view('home', compact('calendar','phong'));
    }
}
