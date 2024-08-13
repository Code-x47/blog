<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Politics extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "summary",
        "tag",
        "body",
        "file1",
        "file2",
    ];

    public function userPost(){
        return $this->belongsTo(User::class, "user_id");
    }
   public $table = "politics"; 
}
