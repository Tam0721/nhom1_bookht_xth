<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
            ];
        }

        return view('home', ['calendar' => $calendar]);
    }
}
