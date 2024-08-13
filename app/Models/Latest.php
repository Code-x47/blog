<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latest extends Model
{
    use HasFactory;
    public $table = "latest";

    public function userPost(){
        return $this->belongsTo(User::class,"user_id");
    }
}
