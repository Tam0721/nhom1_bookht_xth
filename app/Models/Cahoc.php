<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cahoc extends Model
{
    protected $table = 'ca_hoc';
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'ten-ca-hoc',
        'loai-ca-hoc'
    ];
}
