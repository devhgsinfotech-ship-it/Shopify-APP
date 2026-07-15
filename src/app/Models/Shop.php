<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'shop',
        'access_token',
        'shop_name',
        'email',
        'country',
        'currency',
        'scopes',
        'is_installed',
    ];
}