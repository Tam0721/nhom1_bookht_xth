<?php

namespace App\Http\Controllers;

use App\Models\Coso;
use App\Models\Toa;
use App\Models\Tang;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coso = Coso::all();
        $toas = Toa::all();
        $tangs = Tang::with('toa.co_so')->get(); // Lấy cả thông tin về tầng và  tòa tương ứng

        $data = [
            'cs' => $coso,
            'toas' => $toas,
            'tangs' => $tangs,
            // 'cttoa_tang'=> $chitiet

        ];
        return view('admin.cs_toa_tang.qlycoso-toa-tang', $data);
    }
}
