<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendaki extends Model
{
	protected $table = 'pendaki';
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	protected $fillable = [
     'kode_pendakian', 'nama', 'alamat', 'no_hp', 'email', 'jenis_kelamin', 'no_id', 'jenis_id', 'kebangsaan', 'pekerjaan', 'status', 'biaya'
    ];
}
