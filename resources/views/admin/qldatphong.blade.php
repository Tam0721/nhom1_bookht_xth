@extends('admin/layout')
@section('noidung')
        <main>
            <div class="search"></div>



            <div class="timetable">
                <div class="name-title">Danh sách đặt phòng</div>
                <br>
                <table>
                    <thead>
                        <tr>
                            <th class="title-name">STT </th>
                            <th class="title-name">Thời gian </th>
                            <th class="title-name">Họ Và Tên</th>
                            <th class="title-name">Bộ Môn</th>
                            <th class="title-name">Cơ Sở</th>
                            <th class="title-name">Tòa</th>
                            <th class="title-name">Tầng</th>
                            <th class="title-name">Loại phòng</th>
                            <th class="title-name">Ngày đặt</th>
                            <th class="title-name">Ca/Buổi</th>
                            <th class="title-name">Mã phòng</th>
                            <th class="title-name">Status</th>
                            <th class="title-name">Lý do hủy</th>
                            <th class="title-name">Action</th>
                        </tr>
                        <tr>
                            <th>28/9/2023,10h30 </th>
                            <th>TP HCM</th>
                            <th>Đỗ Trọng Nhân</th>
                            <th>CNTT</th>
                            <th>TP.HCM</th>
                            <th>T</th>
                            <th>Tầng 11</th>
                            <th>Phòng học</th>
                            <th>13/10/2023</th>
                            <th>6</th>
                            <th>T1101</th>
                            <th>Chờ duyệt</th>
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
                            <th>Đỗ Trọng Nhân</th>
                            <th>CNTT</th>
                            <th>TP.HCM</th>
                            <th>T</th>
                            <th>Tầng 11</th>
                            <th>Phòng học</th>
                            <th>13/10/2023</th>
                            <th>6</th>
                            <th>T1101</th>
                            <th>Chờ duyệt</th>
                            <th></th>
                            <th>
                                <div class="dropdown">
                                
                                    <div class="dropdown-content">
                                        <a href="#">Duyệt</a>
                                        <a href="#">Không</a>
                                    </div>
                                  </div>
                        </tr>
                        <tr>
                            <th>28/9/2023,10h30 </th>
                            <th>TP HCM</th>
                            <th>Đỗ Trọng Nhân</th>
                            <th>CNTT</th>
                            <th>TP.HCM</th>
                            <th>T</th>
                            <th>Tầng 11</th>
                            <th>Phòng học</th>
                            <th>13/10/2023</th>
                            <th>6</th>
                            <th>T1101</th>
                            <th>Chờ duyệt</th>
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
                            <th>Đỗ Trọng Nhân</th>
                            <th>CNTT</th>
                            <th>TP.HCM</th>
                            <th>T</th>
                            <th>Tầng 11</th>
                            <th>Phòng học</th>
                            <th>13/10/2023</th>
                            <th>6</th>
                            <th>T1101</th>
                            <th>Chờ duyệt</th>
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
                        <!-- Thêm các hàng dữ liệu khác -->
                    </tbody>
                </table>
            </div>
        </main>
        <br>
        <hr>
       @endsection