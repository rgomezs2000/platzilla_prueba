<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersXUserFriends extends Model
{
    protected $fillable = [
        'id',
        'user_id_friend',
    ];
}
