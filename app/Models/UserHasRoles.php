<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasRoles extends Model
{
    use HasFactory;
    protected $table = 'user_has_roles';
    protected $guarded = [];
    protected $fillable = [
        'user_id',
        'roles_id'
    ];
}
