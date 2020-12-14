<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;;

class Admin extends Authenticatable
{

  protected $guard = 'admin';
  
  use   Notifiable;

    protected $fillable = [
      'name','email','password','phone',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
