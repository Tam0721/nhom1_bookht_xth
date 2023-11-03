
<?php

use Illuminate\Support\Facades\DB;

$coso = DB::table('coso')->get();




?>

<div class="search">
    <div class="dropdown">
        <button class="btn text-primary border border-primary dropdown-toggle" type="button"
            id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            CƠ SỞ
        </button>
        @foreach ( as )

        @endforeach
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><button class="dropdown-item" type="button">{{  }}</button></li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn text-primary border border-primary dropdown-toggle" type="button"
            id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            TÒA
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><button class="dropdown-item" type="button">Tòa T</button></li>
            <li><button class="dropdown-item" type="button">Tòa F</button></li>
            <li><button class="dropdown-item" type="button">Tòa P</button></li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn text-primary border border-primary dropdown-toggle" type="button"
            id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            TẦNG
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><button class="dropdown-item" type="button">Tầng 2</button></li>
            <li><button class="dropdown-item" type="button">Tầng 3</button></li>
            <li><button class="dropdown-item" type="button">Tầng 10</button></li>
            <li><button class="dropdown-item" type="button">Tầng 11</button></li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn text-primary border border-primary dropdown-toggle" type="button"
            id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            LOẠI PHÒNG
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><button class="dropdown-item" type="button">Phòng học</button></li>
            <li><button class="dropdown-item" type="button">Xưởng thực hành</button></li>
            <li><button class="dropdown-item" type="button">Hội trường</button></li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn text-primary border border-primary" type="button" id="datepicker2">
            THỜI GIAN
        </button>


    </div>
    <div class="dropdown">
        <input class="button-timkiem" type="submit" value="Tìm kiếm">
    </div>
</div>
