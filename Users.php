<?php

namespace App\Domain\Entities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Users as Authenticatable;

class Users extends Model
{
    // use Notifiable;

    protected $fillable = [
        'name', 'id_anggota', 'nis', 'email', 'password', 'level', 'status',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
