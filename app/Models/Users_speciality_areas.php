<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users_speciality_areas extends Model
{
    protected $table = 'users_speciality_areas';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'

    ];
}