<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Domain\Entities
 */
class Visitors extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'nis',
    ];

}
