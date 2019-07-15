<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kuota extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	protected $table='kuota';
	protected $fillable = [
     'tanggal', 'kuota'
    ];
}
