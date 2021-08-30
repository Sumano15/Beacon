<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nama', 'no_tlep', 'id_line', 'instagram','email','foto','kartu_pelajar', 'tim_id'];

}
