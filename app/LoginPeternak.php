<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginPeternak extends Authenticatable
{
    protected $table = 'peternak';
}
