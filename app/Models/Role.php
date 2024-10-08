<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public const IS_USER = 1;
    public const IS_ADMIN = 2;
    public const IS_MANAGER = 3;

    public function roleName() {
    return $this->hasMany(User::class,"role_id");
    }
}
