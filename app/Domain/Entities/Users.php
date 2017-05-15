<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Users extends Entities implements AuthenticatableContract, CanResetPasswordContract
{
   use SoftDeletes, Authenticatable, CanResetPassword;

    protected $fillable = [
        'id', 'name', 'email', 'password', 'level'
    ];

    protected $hidden = [
    'password', 'remember_token',
    ];
    protected $primaryKey = 'id';
}
