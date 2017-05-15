<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Entities
{
    use SoftDeletes;

    protected $table='log';
    protected $fillable = [
        'id', 'nama', 'email', 'telephone', 'keperluan', 'description'
    ];

    protected $primaryKey = 'id';
     
}
