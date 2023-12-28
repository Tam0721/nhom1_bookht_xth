﻿<p align="center"><img src="/public/img/logo-fpt.png" alt="PolyBooking Logo"></p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About PolyBooking

<p>
    Website PolyBooing was developed by students from FPT Polytechnic College. The website is developed to allow lecturers to book hall and classrooms for events or other learning activities. 
</p>

## Developers

- Trần Thị Mỹ Tâm
- Trần Thiên Phúc
- Trần Vĩnh Phúc
- Hồ Văn Đạt
- Phan Võ Trọng Phong
- Đỗ Trọng Nhân
- Nguyễn Tuấn Kiệt

## Download

On `Github`: <a href="https://github.com/Tam0721/nhom1_bookht_xth">Here</a>

```
git clone https://github.com/Tam0721/nhom1_bookht_xth.git
```

Or on `Google Drive`: <a href="https://drive.google.com/drive/u/2/folders/1fhHQgWxMTcj1j2mQehBiYoXzC4EybZBQ?q=sharedwith:public%20parent:1fhHQgWxMTcj1j2mQehBiYoXzC4EybZBQ" target="_blank">Here</a>

<a href="https://drive.google.com/drive/u/2/folders/1fhHQgWxMTcj1j2mQehBiYoXzC4EybZBQ?q=sharedwith:public%20parent:1fhHQgWxMTcj1j2mQehBiYoXzC4EybZBQ" target="_blank">
    <img src="https://6flames.id.vn/public/frontend/img/readme/banner_sc.jpg">
</a>

## Setting

Extract source

<img src="/public/frontend/img/readme/extract.png">

Create new folder in `xampp\htdocs` and move source to the folder was just created

<img src="/public/frontend/img/readme/move_source.png">

## Open the window `Command Line` in the folder was just created

Remove bootstrap files `events`, `views`, `cache`, `route`, `config`, `compiled` to optimize the website

```
php artisan optimize:clear
```

Create new key

```
php artisan key:generate
```

## Access phpmyadmin in `Xampp Control Panel`

Create new database

<img src="https://6flames.id.vn/public/frontend/img/readme/import1.png">

`Import` database

<img src="https://6flames.id.vn/public/frontend/img/readme/import2.png">

## Connect to database

Update information in file `.env` to connect to database

<img src="https://6flames.id.vn/public/frontend/img/readme/connect.jpg">

## Run website
Open `Command Line`

```
npm run dev
```

<img src="https://6flames.id.vn/public/frontend/img/readme/run.png">

```
php artisan serve
```

<img src="https://6flames.id.vn/public/frontend/img/readme/run.png">

## Login to administration page

Access:

```
127.0.0.1:8000/login
```

- Email: <b>admin@fe.edu.vn</b>

- Mật khẩu: <b>12345678</b>
