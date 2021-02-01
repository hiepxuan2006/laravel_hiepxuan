<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'users';
    protected $fillable = [
        'image',
        'username',
        'password',
        'fullname',
        'email',
        'role',
    ];
    protected $dates = ['deleted_at'];
    protected $hidden = [
        // 'password'
    ];
}
