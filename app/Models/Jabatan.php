<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table    = 'jabatan';
    public $timestamps = false;
    protected $fillable = ['nama_jabatan', 'gapok_jabatan', 'tunjangan_jabatan', 'uang_makan'];

}
