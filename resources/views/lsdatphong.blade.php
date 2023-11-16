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
            <tr id='ls-phong-1'>
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
                            <a href="javascript:void(0)" class="btn d-none m-0 p-0" id="datPhong">Đặt lại</a>
                            <button type="button" id="huyPhong" class="btn text-primary m-0 p-0" data-bs-toggle="modal" data-bs-target="#staticReasonCancel">
                                Hủy phòng
                            </button>
                            {{-- <a href="{{ route('huyPhong') }}"></a> --}}
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
</main>
<br>
<hr>
{{-- modal --}}
<div class="modal fade" id="staticReasonCancel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticReasonCancelLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1> --}}
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
            <div class="modal-body">
            <div class="card">
                <div class="card-title">
                    <h2 class="fs-5 fw-bold mt-3 mb-2 text-center text-uppercase">Lí do hủy</h2>
                    <hr>
                </div>
                <div class="card-body">
                    <form action="{{ route('huyPhong',['id'=>1]) }}" method="post" > 
                        @csrf
                        <div class="mb-3">
                            <label for="liDoHuy" class="form-label">Vui lòng nhập lí do bạn muốn hủy phòng </label>
                            <input type="text" name="liDo" class="form-control valid" id="liDoHuy" required>
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                        <div class="float-end">
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
{{-- script --}}
{{-- <script>
    var datLaiPhong = document.querySelector('#datPhong');
    function Comfirm(){
        datLaiPhong.setAttribute('class','btn text-primary m-0 p-0');
        document.querySelector('#huyPhong').remove();
    }
</script> --}}
@endsection
