<?php

namespace Modules\Hoteliers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class hoteliers extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $table = 'hoteliers';
    public $timestamps = false;
}
