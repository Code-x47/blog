<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\fComment;
use App\Models\Bizcomment;
use App\Models\entComment;
use App\Models\polComment;
use App\Models\Sportcomment;
use Illuminate\Http\Request;
use App\Models\Latestcomment;

class commentControl extends Controller
{
   function polComment(Request $req){
      $req->validate([
        "comment"=>"Required"
      ]);

     $comment = new polComment;
     $comment->user_id = auth()->id();
     $comment->politics_id = $req->id;
     $comment->comment = $req->comment;
     $comment->save();
     return redirect()->back();
   }


   function foodComment(Request $req){
    $req->validate([
      "comment"=>"Required"
    ]);

   $comment = new fComment;
   $comment->user_id = auth()->id();
   $comment->food_id = $req->id;
   $comment->comment = $req->comment;
   $comment->save();
   return redirect()->back();
 }



function back2Food(){
  $view = Food::all();
  $view2 = Food::all();
  return view("blog.foodPost",compact("view","view2"));
 }



 function entComment(Request $req){
  $req->validate([
    "comment"=>"Required"
  ]);

 $comment = new entComment;
 $comment->user_id = auth()->id();
 $comment->entertainment_id = $req->id;
 $comment->comment = $req->comment;
 $comment->save();
 return redirect()->back();
}


function latestComment(Request $req){
  $req->validate([
    "comment"=>"Required"
  ]);

 $comment = new Latestcomment;
 $comment->user_id = auth()->id();
 $comment->travel_id = $req->id;
 $comment->comment = $req->comment;
 $comment->save();
 return redirect()->back();
}



function bizComment(Request $req){
  $req->validate([
    "comment"=>"Required"
  ]);

 $comment = new Bizcomment;
 $comment->user_id = auth()->id();
 $comment->businesses_id = $req->id;
 $comment->comment = $req->comment;
 $comment->save();
 return redirect()->back();
}


function sptComment(Request $req){
  $req->validate([
    "comment"=>"Required"
  ]);

 $comment = new Sportcomment;
 $comment->user_id = auth()->id();
 $comment->sports_id = $req->id;
 $comment->comment = $req->comment;
 $comment->save();
 return redirect()->back();
}


}
