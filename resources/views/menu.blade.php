<div class="search">
    <form class="d-md-flex m-2" method="get" action="">
        <div class="dropdown">
            <select class="btn text-primary border border-primary dropdown-toggle" name="coSo" id="id_co_so">
                <option value="0">Chọn Cơ sở</option>
                @foreach ($coSo as $item)
                    <option value="{{ $item->id_co_so }}">{{ $item->ten_co_so }}</option>
                @endforeach
            </select>
        </div>
        <div class="dropdown">
            <select class="btn text-primary border border-primary dropdown-toggle" name="toa" id="id_toa_nha">
                <option value="0">Chọn Tòa</option>
                {{-- @foreach ($toa as $item)
                    <option value="{{$item->id_toa_nha}}">{{$item->ten_toa_nha}}</option>
                @endforeach --}}
            </select>
        </div>
        <div class="dropdown">
            <select class="btn text-primary border border-primary dropdown-toggle" name="tang" id="id_tang">
                <option value="0">Chọn Tầng</option>
            </select>
        </div>
        <div class="dropdown">
            <select class="btn text-primary border border-primary dropdown-toggle" name="loaiPhong" id="">
                <option value="0">Chọn Loại Phòng</option>
                @foreach ($loaiPhong as $item)
                    <option value="{{$item->id_loai_phong}}">{{$item->ten_loai_phong}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="button-timkiem">Tìm kiếm</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            // Thêm sự kiện chọn vào trường select đầu tiên
            $('#id_co_so').change(function() {
                // Lấy giá trị của option được chọn
                var selectedCoSoId = $(this).val();

                // Gửi yêu cầu Ajax để lấy danh sách tòa nhà liên quan đến cơ sở đã chọn
                $.ajax({
                    url: '/get-toa-nha/' + selectedCoSoId, // Đặt URL của endpoint để lấy danh sách tòa nhà
                    method: 'GET',
                    success: function(response) {
                        // Xóa các tùy chọn hiện tại trong trường select tòa nhà
                        $('#id_toa_nha').empty();

                        // Thêm mặc định và sau đó thêm các tùy chọn mới từ response vào trường select tòa nhà
                        $('#id_toa_nha').append(
                            '<option value="" hidden selected>Chọn tòa nhà</option>'
                        );

                        $.each(response, function(index, toaNha) {
                            $('#id_toa_nha').append(
                                '<option value="' + toaNha.id_toa_nha + '">' + toaNha.ten_toa_nha + '</option>'
                            );
                        });
                    }
                });
            });
        });

        $(document).ready(function() {
            // Thêm sự kiện chọn vào trường select đầu tiên
            $('#id_toa_nha').change(function() {
                // Lấy giá trị của option được chọn
                var selectedToaNhaId = $(this).val();

                // Gửi yêu cầu Ajax để lấy danh sách tòa nhà liên quan đến cơ sở đã chọn
                $.ajax({
                    url: '/get-tang/' + selectedToaNhaId, // Đặt URL của endpoint để lấy danh sách tòa nhà
                    method: 'GET',
                    success: function(response) {
                        // Xóa các tùy chọn hiện tại trong trường select tòa nhà
                        $('#id_tang').empty();

                        // Thêm mặc định và sau đó thêm các tùy chọn mới từ response vào trường select tòa nhà
                        $('#id_tang').append(
                            '<option value="" hidden selected>Chọn tầng</option>');
                        $.each(response, function(index, tang) {
                            $('#id_tang').append(
                                '<option value="' + tang.id_tang + '">' + tang.ten_tang + '</option>'
                            );
                        });
                    }
                });
            });
        });
</script>
