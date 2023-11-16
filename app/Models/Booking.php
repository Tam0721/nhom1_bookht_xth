<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $primaryKey = 'id_booking';
    protected $fillable = 
    [
        'ngay_dat',
        'ngay_to_chuc',
        'thoi_gian_bat_dau',
        'su_kien',
        'ghi_chu_admin',
        'ly_do_huy',
        'so_luong',
        'id_bo_mon',
        'id_user',
        'id_phong'
    ];

    public function getUser() {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
