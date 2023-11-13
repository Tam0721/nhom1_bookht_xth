@component('mail::message')
Chúng tôi đã hủy phòng của anh/chị
@auth
    {{Auth::user()->name}}    
@endauth
vì lí do bla bla
<br>
    Hãy bấm vào đây để quay lại đặt phòng
    @component('mail::button',['url' => 'http://127.0.0.1:8000/'])
        Đặt phòng
    @endcomponent
@endcomponent
