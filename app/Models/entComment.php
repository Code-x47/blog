<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entComment extends Model
{
    use HasFactory;
    public $table = "entcomments";
    public function userCom(){
        return $this->belongsTo(User::class,"user_id");
       }
}
