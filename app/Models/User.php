<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use HasFactory;
    use softDeletes;
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'image',
        'username',
        'password',
        'fullname',
        'email',
        'role',
    ];
    protected $hidden = [
        // 'password'
    ];
}
