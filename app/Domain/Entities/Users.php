<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Domain\Entities
 */
class Users extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'id', 'nis', 'name', 'email', 'password', 'level', 'status',
    ];

    protected $hidden = ['password'];
     protected $primaryKey = 'id';
}
