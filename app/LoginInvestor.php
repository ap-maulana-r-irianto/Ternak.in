<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginInvestor extends Authenticatable
{
    protected $table = 'investor';
}
