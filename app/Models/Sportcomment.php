<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sportcomment extends Model
{
    use HasFactory;

    

    public function userCom(){
        return $this->belongsTo(User::class,"user_id");
       }
}
