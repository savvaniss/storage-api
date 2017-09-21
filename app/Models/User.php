<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model{

    protected $table='users';

    protected $fillable= [
        'email',
        'username',
        'firstname',
        'lastname',
        'password',
        'loginType'
    ];

}
