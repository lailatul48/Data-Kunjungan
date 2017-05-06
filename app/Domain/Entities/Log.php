<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Entities
{
    use SoftDeletes;

    protected $table='log';
    protected $fillable = [
        'id', 'user_id', 'description', 'type'
    ];

    protected $primaryKey = 'id';
     
}
