@php
    use App\models\Booking;
    use App\models\cahoc;
    use App\models\coso;
    use App\models\toa;
    use App\models\tang;
@endphp
@extends('app')
@section('noidung')
    <main>
        <div class="timetable">
            <table>
                <thead>
                    <tr class="head">
                        <th class="mau-xanhla">Thứ</th>
                        @foreach ($calendar as $item)
                            <th class="mau-da" colspan="6">{{ $item['Thu'] }}</th>
                        @endforeach
                    </tr>
                    <tr class="head">
                        <th class="mau-xanhla">Ngày</th>
                        @foreach ($calendar as $day)
                            <th class="mau-da" colspan="6">
                                {{ $day['day'] }}
                            </th>
                        @endforeach
                    </tr>
                    @if ($phong[0]->id_loai_phong == 1)
                        <tr class="ca">
                            <th class="mau-xanhla">Ca</th>
                            @php
                                for ($i = 0; $i < 7; $i++) {
                                    echo '  <th class="mau-da">1</th>
                                        <th class="mau-da">2</th>
                                        <th class="mau-da">3</th>
                                        <th class="mau-da">4</th>
                                        <th class="mau-da">5</th>
                                        <th class="mau-da">6</th>';
                                }
                            @endphp
                        </tr>
                    @else
                        <tr class="ca">
                            <th class="mau-xanhla">Ca</th>
                            @php
                                for ($i = 0; $i < 7; $i++) {
                                    echo '  <th colspan="3" class="mau-da">Sáng</th>
                                        <th colspan="3" class="mau-da">Chiều</th>';
                                }
                            @endphp
                        </tr>
                    @endif

                    <!-- button tròn -->
                    @foreach ($phong as $item)
                        @if ($item->id_loai_phong == 1)
                            <tr class="ca">
                                <th class="mau-xanhla">{{ $item->ten_toa_nha . $item->ten_tang . $item->ten_phong }}</th>
                                @foreach ($calendar as $time)
                                    @php
                                        for ($i = 1; $i <= 6; $i++) {
                                            $booking = Booking::where('ngay_dat', $time['time'])
                                                ->where('id_phong', $item->id_phong)
                                                ->where('id_ca_hoc', $i)
                                                ->first();
                                            $caHoc = cahoc::find($i);
                                            if ($booking) {
                                                if ($booking->booking_status == 0) {
                                                    // $color = 'circle button-blue';
                                                    echo '<th class=""><button class="circle button-blue"></button></th>';
                                                }
                                                if ($booking->booking_status == 1) {
                                                    // $color = 'circle button-red';
                                                    echo '<th class=""><button class="circle button-red"></button></th>';
                                                }
                                            } else {
                                                // $color = 'circle button-white';
                                                echo '<th class=""><button class="circle button-white"></button></th>';
                                            }
                                        }
                                    @endphp
                                @endforeach
                            </tr>
                        @else
                            <tr class="ca">
                                <th class="mau-xanhla">{{ $item->ten_phong }}</th>
                                @foreach ($calendar as $time)
                                    @php
                                        for ($i = 1; $i <= 2; $i++) {
                                            $booking = Booking::where('ngay_dat', $time['time'])
                                                ->where('id_phong', $item->id_phong)
                                                ->where('id_ca_hoc', $i)
                                                ->first();
                                            if ($booking) {
                                                if ($booking->booking_status == 0) {
                                                    $color = 'circle button-blue';
                                                }
                                                if ($booking->booking_status == 1) {
                                                    $color = 'circle button-red';
                                                }
                                            } else {
                                                $color = 'circle button-white';
                                            }
                                            echo '<th colspan="3" class=""><button class="' . $color . '"></button></th>';
                                        }
                                    @endphp
                                @endforeach
                            </tr>
                        @endif
                    @endforeach
                </thead>

            </table>
            <br>
            {{ $phong->links() }}
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
                <input type="hidden" value="" name="coso">
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
        {{-- <section id="form">
            <form action="http://localhost:8000/booking" method="post">
                <i class="fi fi-br-cross" id="thoat-form"></i>
                <h1>ĐẶT PHÒNG</h1>
                <label>Cơ sở:</label><br>
                <input type="text" class="form-control" value="' .$item->ten_co_so .'" disabled><br>
                <input type="hidden" value="' .$item->id_phong .'" name="id_phong">
                <label>Thông tin phòng:</label><br>
                <input type="text" class="form-control" disabled value="' .$item->ten_toa_nha.$item->ten_tang.$item->ten_phong.'" >
                <br>
                <label>Ngày tổ chức:</label><br>
                <input class="datepicker" placeholder="Chọn ngày" name="ngay_to_chuc">                                                            
                <label>Ca Học:</label><br>
                <input type="text" class="form-control" disabled value="' .$caHoc->ten_ca_hoc .'"><br>
                <input type="hidden" value="' .$caHoc->id_ca_hoc .'" name="id_ca_hoc">
                <label>Sự kiện:</label><br>
                <input type="text" class="form-control" disbled value="" name="su_kien" placeholder="Nhập vào sự kiện">
                <input type="hidden" value="' .Auth::id() .'" name="id_user">
                <select class="form-select" id="loaiphong" name="id_bo_mon">
                    <option value="">Chọn Bộ Môn</option>
                    <option value="1">CNTT</option>
                    <option value="2">Quản trị kinh doanh</option>
                </select>
                <button type="submit" class="btn btn-primary">ĐẶT PHÒNG</button>
            </form>
        </section> --}}
    </main>
@endsection
