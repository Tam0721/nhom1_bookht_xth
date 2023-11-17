<div class="search">
    {{-- <div class="dropdown">
        <button class="btn text-primary border border-primary dropdown-toggle" type="button" id="dropdownMenu2"
            data-bs-toggle="dropdown" aria-expanded="false">
            CƠ SỞ
        </button>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li>
                @foreach ($coso as $cs)
                    <button class="dropdown-item" type="button">{{ $cs->ten_co_so }}</button>
                @endforeach
            </li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn text-primary border border-primary dropdown-toggle" type="button" id="dropdownMenu2"
            data-bs-toggle="dropdown" aria-expanded="false">
            TÒA
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li>
                @foreach ($toa as $t)
                    <button class="dropdown-item" type="button">{{ $t->ten_toa_nha }}</button>
                @endforeach
            </li>

        </ul>
    </div>
    <div class="dropdown">
        <button class="btn text-primary border border-primary dropdown-toggle" type="button" id="dropdownMenu2"
            data-bs-toggle="dropdown" aria-expanded="false">
            TẦNG
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li>
                @foreach ($tang as $tag)
                    <button class="dropdown-item" type="button">{{ $tag->ten_tang }}</button>
                @endforeach
            </li>

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
    </div> --}}
    <form class="d-md-flex m-2" method="get" action="">
        <div class="col-6">
            <select name="coSo" id="">
                <option value="0">Chọn Cơ sở</option>
                @foreach ($coSo as $item)
                    <option value="{{ $item->id_co_so }}">{{ $item->ten_co_so }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <select name="toa" id="">
                <option value="0">Chọn Tòa</option>
                @foreach ($toa as $item)
                    <option value="{{$item->id_toa_nha}}">{{$item->ten_toa_nha}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <select name="tang" id="">
                <option value="0">Chọn Tầng</option>
                @foreach ($tang as $item)
                    <option value="{{$item->id_tang}}">{{$item->ten_tang}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <select name="loaiPhong" id="">
                <option value="0">Chọn Loại Phòng</option>
                @foreach ($loaiPhong as $item)
                    <option value="{{$item->id_loai_phong}}">{{$item->ten_loai_phong}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit">Tìm kiếm</button>
    </form>
</div>
