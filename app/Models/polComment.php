<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class polComment extends Model
{
    use HasFactory;
  public $table = "pol_comment";
   public function userCom(){
    return $this->belongsTo(User::class,"user_id");
   }

}
