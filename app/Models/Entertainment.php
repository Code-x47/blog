<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
    use HasFactory;
    
   public function userPost(){
        return $this->belongsTo(User::class, "user_id");
    }
   public $table = "Entertainment";

}
