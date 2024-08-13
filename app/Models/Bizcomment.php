<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bizcomment extends Model
{
    use HasFactory;
    
    public $table = "biz_comment";

    public function userCom(){
        return $this->belongsTo(User::class,"user_id");
       }
}
