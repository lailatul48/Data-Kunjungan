<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitors extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
       'id', 'name', 'nis',
    ];

     protected $primaryKey = 'id';

}
