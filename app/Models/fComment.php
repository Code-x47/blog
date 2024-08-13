<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fComment extends Model
{
    use HasFactory;
    
    public $table = "fComments";

    public function userCom(){
        return $this->belongsTo(User::class,"user_id");
       }
}
