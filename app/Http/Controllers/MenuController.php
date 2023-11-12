<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index() {
        return view ('home');
    }

    function coso(){
            $coso = DB::table('co_so')->get();
            return view('menu', ['coso'=>$coso]);
    }
    function toa(){
        $toa=DB::table('toa_nha')->get();
        return view('menu',['toa'=>$toa]);
    }
    function tang(){
        $tang=DB::table('tang')->get();
        return view('menu',['tang'=>$tang]);
    }

}
