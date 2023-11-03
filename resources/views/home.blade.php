@extends('layout')
@section('noidung')
<link rel="stylesheet" href="css/style.css">
<div class="search">
    <div class="dropdown">
        <button class="btn text-primary border border-primary dropdown-toggle" type="button" id="dropdownMenu2"
            data-bs-toggle="dropdown" aria-expanded="false">
            CƠ SỞ
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><button class="dropdown-item" type="button">Hồ Chí Minh</button></li>
            <li><button class="dropdown-item" type="button">Hà Nội</button></li>
            <li><button class="dropdown-item" type="button">Đà Nẵng</button></li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn text-primary border border-primary dropdown-toggle" type="button" id="dropdownMenu2"
            data-bs-toggle="dropdown" aria-expanded="false">
            TÒA
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><button class="dropdown-item" type="button">Tòa T</button></li>
            <li><button class="dropdown-item" type="button">Tòa F</button></li>
            <li><button class="dropdown-item" type="button">Tòa P</button></li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn text-primary border border-primary dropdown-toggle" type="button" id="dropdownMenu2"
            data-bs-toggle="dropdown" aria-expanded="false">
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
        <button class="btn text-primary border border-primary dropdown-toggle" type="button" id="dropdownMenu2"
            data-bs-toggle="dropdown" aria-expanded="false">
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



<div class="timetable">
    <table>
        <thead>
            <tr class="head">
                <th class="mau-xanhla">Thứ</th>
                <th class="mau-da" colspan="6">Thứ 2</th>
                <th class="mau-xanh" colspan="6">Thứ 3</th>
                <th class="mau-da" colspan="6">Thứ 4</th>
                <th class="mau-xanh" colspan="6">Thứ 5</th>
                <th class="mau-da" colspan="6">Thứ 6</th>
                <th class="mau-xanh" colspan="6">Thứ 7</th>
                <th class="mau-da" colspan="6">Chủ nhật</th>
            </tr>
            <tr class="head">
                <th class="mau-xanhla">Ngày</th>
                <th class="mau-da" colspan="6">10/2/2023</th>
                <th class="mau-xanh" colspan="6">10/3/2023</th>
                <th class="mau-da" colspan="6">10/4/2023</th>
                <th class="mau-xanh" colspan="6">10/5/2023</th>
                <th class="mau-da" colspan="6">10/6/2023</th>
                <th class="mau-xanh" colspan="6">10/7/2023</th>
                <th class="mau-da" colspan="6">10/8/2023</th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">Ca</th>
                <th class="mau-da">1</th>
                <th class="mau-da">2</th>
                <th class="mau-da">3</th>
                <th class="mau-da">4</th>
                <th class="mau-da">5</th>
                <th class="mau-da">6</th>
                <th class="mau-xanh">1</th>
                <th class="mau-xanh">2</th>
                <th class="mau-xanh">3</th>
                <th class="mau-xanh">4</th>
                <th class="mau-xanh">5</th>
                <th class="mau-xanh">6</th>
                <th class="mau-da">1</th>
                <th class="mau-da">2</th>
                <th class="mau-da">3</th>
                <th class="mau-da">4</th>
                <th class="mau-da">5</th>
                <th class="mau-da">6</th>
                <th class="mau-xanh">1</th>
                <th class="mau-xanh">2</th>
                <th class="mau-xanh">3</th>
                <th class="mau-xanh">4</th>
                <th class="mau-xanh">5</th>
                <th class="mau-xanh">6</th>
                <th class="mau-da">1</th>
                <th class="mau-da">2</th>
                <th class="mau-da">3</th>
                <th class="mau-da">4</th>
                <th class="mau-da">5</th>
                <th class="mau-da">6</th>
                <th class="mau-xanh">1</th>
                <th class="mau-xanh">2</th>
                <th class="mau-xanh">3</th>
                <th class="mau-xanh">4</th>
                <th class="mau-xanh">5</th>
                <th class="mau-xanh">6</th>
                <th class="mau-da">1</th>
                <th class="mau-da">2</th>
                <th class="mau-da">3</th>
                <th class="mau-da">4</th>
                <th class="mau-da">5</th>
                <th class="mau-da">6</th>
            </tr>
            <!-- button tròn -->
            <tr class="ca">
                <th class="mau-xanhla">T801</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T802</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T803</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T804</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T805</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T806</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T807</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T808</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T809</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T810</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T811</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T812</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T813</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T814</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T815</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T816</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T817</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T818</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T819</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T820</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
            <tr class="ca">
                <th class="mau-xanhla">T821</th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-red"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-blue"></button></th>
                <th class=""><button class="circle button-white"></button></th>
            </tr>
        </thead>

    </table>
</div>
<section id="form">
    <form action="">
        <i class="fi fi-br-cross" id="thoat-form"></i>
        <h1>ĐẶT PHÒNG</h1>

        <select class="form-select" id="coso" name="coso">
            <option value="" hidden selected>Chọn cơ sở</option>
            <option value="HCM">Hồ Chí Minh</option>
            <option value="HN">Hà Nội</option>
            <option value="DN">Đà Nẵng</option>
        </select>
        <select class="form-select" id="toanha" name="toanha">
            <option value="" hidden selected>Chọn toà nhà</option>
            <option value="toaF">Tòa F</option>
            <option value="toaP">Tòa P</option>
            <option value="toaT">Tòa T</option>
        </select>
        <select class="form-select" id="tang" name="tang">
            <option value="" hidden selected>Chọn tầng</option>
            <option value="tang_1">Tầng 1</option>
            <option value="tang_2">Tầng 2</option>
            <option value="tang_3">Tầng 3</option>
        </select>
        <select class="form-select" id="loaiphong" name="loaiphong">
            <option value="" hidden selected>Chọn loại phòng</option>
            <option value="phonghoc">Phòng học</option>
            <option value="xuongth">Xưởng thực hành</option>
            <option value="hoitruong">Hội trường</option>
        </select>
        <input class="datepicker" placeholder="Chọn ngày">
        <select class="form-select" id="cahoc" name="cahoc">
            <option value="" hidden selected>Chọn ca</option>
            <option value="ca_1">Ca 1</option>
            <option value="ca_2">Ca 2</option>
            <option value="ca_3">Ca 3</option>
        </select>
        <input class="form-control" type="text" placeholder="Số phòng">
        <input class="form-control" type="text" placeholder="Sự kiện">
        <button type="button" class="btn btn-primary">ĐẶT PHÒNG</button>
    </form>
</section>

</main>


</div>
@endsection