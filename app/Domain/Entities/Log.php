<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Domain\Entities
 */
class Log extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $table='log';
    protected $fillable = [
        'description', 'type',
    ];

}
