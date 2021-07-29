<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = [
        'nik', 'full_name', 'email', 'mobile_number', 'address'
    ];
    public $timestamps = false;
}
