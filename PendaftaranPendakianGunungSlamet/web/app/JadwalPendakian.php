<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalPendakian extends Model
{
	protected $table = 'jadwal_pendakian';
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	protected $fillable = [
     'kode_pendakian', 'tanggal_pendakian'
    ];
}
