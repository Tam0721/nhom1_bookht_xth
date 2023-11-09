<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Signup</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <div class="signup">
        <h1 class="signup-heading">Đăng nhập</h1>
        <a class="signup-social" href="{{route('login-google')}}" style='text-decoration:none;'>
            <i class="fa fa-google signup-social-icon"></i>
            <span class="signup-social-text">ĐĂNG NHẬP VỚI GOOGLE</span>
        </a>

        <form method="POST" action="{{ route('login') }}" class="form-dangnhap" autocomplete="off">
            @csrf
            {{-- Email --}}
            <label for="email" class="signup-label" :value="__('Email')">Email</label>
            <input type="text" id="email" name = "email" :value="old('email')" class="signup-input"
                placeholder="Email giảng viên">
            @error('email')
                <div class="badge" style="color:red; font-size: 1.5em" role="alert">
                    <strong>* {{ $message }}</strong>
                </div>
            @enderror
            <br>

            {{-- Password --}}
            <label for="password" class="signup-label" :value="__('Password')">Password</label>
            <input type="password" id="password" name="password" class="signup-input" placeholder="Mật khẩu">
            @error('password')
                <div class="badge" style="color:red; font-size: 1.5em" role="alert">
                    <strong>* {{ $message }}</strong>
                </div>
            @enderror
            <br>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" style="text-decoration:none; font-size: 1.5em; color: black;">
                    Quên mật khẩu?
                </a>
            @endif
            <button class="signup-submit" type="submit">Đăng nhập</button>

        </form>

    </div>
</body>

</html>
