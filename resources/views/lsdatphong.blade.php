@extends('layout')
@section('noidung')

<link rel="stylesheet" href="css/style2.css">

<div class="contain">
<div class="timetable">
    <table>
        <thead>
            <tr>
                <th class="">Thời gian </th>
                <th class="mau-da">Cơ sở</th>
                <th class="mau-xanh">Tòa</th>
                <th class="mau-da">Tầng</th>
                <th class="mau-xanh">Loại phòng</th>
                <th class="mau-da">Ngày đặt</th>
                <th class="mau-xanh">Ca/Buổi</th>
                <th class="mau-da">Mã phòng</th>
                <th class="mau-da">Status</th>
                <th class="mau-da">Lý do hủy</th>
                <th class="mau-da">Ghi chú</th>
                <th class="mau-da">Sự kiện</th>
                <th class="mau-da">Action</th>
            </tr>
            <tr>
                <th>28/9/2023,10h30 </th>
                <th>TP HCM</th>
                <th>T</th>
                <th>Tầng 11</th>
                <th>Phòng học</th>
                <th>28/92/20223</th>
                <th>6</th>
                <th>T1101</th>
                <th>Chờ duyệt</th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <a href="#">Duyệt</a>
                            <a href="{{ route('huyPhong') }}">Không</a>
                        </div>
                    </div>
                </th>
            </tr>
            {{-- <tr>
                <th>28/9/2023,10h30 </th>
                <th>TP HCM</th>
                <th>T</th>
                <th>Tầng 11</th>
                <th>Phòng học</th>
                <th>28/92/20223</th>
                <th>6</th>
                <th>T1101</th>
                <th>Chờ duyệt</th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <a href="#">Duyệt</a>
                            <a href="#">Không</a>
                        </div>
                    </div>
                </th>
            </tr>
            <tr>
                <th>28/9/2023,10h30 </th>
                <th>TP HCM</th>
                <th>T</th>
                <th>Tầng 11</th>
                <th>Phòng học</th>
                <th>28/92/20223</th>
                <th>6</th>
                <th>T1101</th>
                <th>Chờ duyệt</th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <a href="#">Duyệt</a>
                            <a href="#">Không</a>
                        </div>
                    </div>
                </th>
            </tr>
            <tr>
                <th>28/9/2023,10h30 </th>
                <th>TP HCM</th>
                <th>T</th>
                <th>Tầng 11</th>
                <th>Phòng học</th>
                <th>28/92/20223</th>
                <th>6</th>
                <th>T1101</th>
                <th>Chờ duyệt</th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <a href="#">Duyệt</a>
                            <a href="#">Không</a>
                        </div>
                    </div>
                </th>
            </tr> --}}
            <!-- Thêm các hàng dữ liệu khác -->
            </tbody>
    </table>
</div>

</div>
</main>
<br>
<hr>
@endsection