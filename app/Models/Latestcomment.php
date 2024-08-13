<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latestcomment extends Model
{
    use HasFactory;
    public $table = "latestcomments";
    public function userCom(){
        return $this->belongsTo(User::class,"user_id");
       }
}
