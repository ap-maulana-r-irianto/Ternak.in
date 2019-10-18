<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginPembeli extends Authenticatable
{
    protected $table = 'pembeli';
}
