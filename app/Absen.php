<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = 'absensi';
    protected $fillable = [
        'nik_id', 'date_time', 'in_out'
    ];
    protected $dates = ['date_time'];
}
