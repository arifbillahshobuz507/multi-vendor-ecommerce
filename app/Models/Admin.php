<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Admin extends Authenticatable
{
    use HasFactory;
    protected  $guarded='admin';
    protected $fildable = [
        'name',
        'email',
        'password',
    ];

}
