<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tim extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nama_tim', 'asal_kota', 'asal_sekolah', 'password','bukti_transfer','nama_akun_bank','nama_bank','norek'];
}
