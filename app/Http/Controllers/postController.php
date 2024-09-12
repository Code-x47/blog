<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Sport;
use App\Models\Latest;
use App\Models\Business;
use App\Models\Politics;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Models\Entertainment;
use App\Events\userSubscribed;
use App\Mail\userSubscribedMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class postController extends Controller

{
// CREATE BUSINESS POST STARTS
   public function createBiz(Request $req){ 
    $data = $req->validate([
        "title"=>"Required",
        "summary"=>"Required",
        "body"=>"Required",
        "tag"=>"Required",
        "file1"=>"Required",
        "file2"=>"Required",
    ]);
    $title = $req->input('title');
    
    $filename1 = time().".".$req->file1->getClientOriginalExtension();
    $filename2 = time().".".$req->file2->getClientOriginalExtension();

     $req->file1->move("bizdoc", $filename1);
     $req->file2->move("bizdoc", $filename2);
 
    $biz = new Business;
    $biz->title = $req->title;
    $biz->body = $req->body;
    $biz->tag = $req->tag;
    $biz->summary = $req->summary;
    $biz->file1 = $filename1;
    $biz->file2 = $filename2;
    $biz->user_id = auth()->id();
    $biz->save();
    //$req->session()->Flash("flashkey",$tiltle);
    return redirect('/bizpost');
}
//END OF CREATE BUSINESS POST

//CREATE FOOD POST
public function createFood(Request $req){ 
    $data = $req->validate([
        "title"=>"Required",
        "summary"=>"Required",
        "body"=>"Required",
        "tag"=>"Required",
        "foodpix1"=>"Required",
        "foodpix2"=>"Required",
    ]);

    
    $fileDoc1 = time().".".$req->foodpix1->getClientOriginalExtension();
    $fileDoc2 = time().".".$req->foodpix2->getClientOriginalExtension();

     $req->foodpix1->move("foodDoc", $fileDoc1);
     $req->foodpix2->move("foodDoc", $fileDoc2);
 
    $food = new Food;
    $food->title = $req->title;
    $food->body = $req->body;
    $food->tag = $req->tag;
    $food->summary = $req->summary;
    $food->file1 = $fileDoc1;
    $food->file2 = $fileDoc2;
    $food->user_id = auth()->id();
    $food->save();

    return redirect('/foodpost');

}
//END OF CREATE FOOD POST



// CREATE POLITICS POST STARTS
public function createPol(Request $req){ 
    $data = $req->validate([
        "title"=>"Required",
        "summary"=>"Required",
        "body"=>"Required",
        "tag"=>"Required",
        "file1"=>"Required",
        "file2"=>"Required",
    ]);
    $title = $req->input('title');
    
    $filename1 = time().".".$req->file1->getClientOriginalExtension();
    $filename2 = time().".".$req->file2->getClientOriginalExtension();

     $req->file1->move("poldoc", $filename1);
     $req->file2->move("poldoc", $filename2);
 
    $biz = new Politics;
    $biz->title = $req->title;
    $biz->body = $req->body;
    $biz->tag = $req->tag;
    $biz->summary = $req->summary;
    $biz->file1 = $filename1;
    $biz->file2 = $filename2;
    $biz->user_id = auth()->id();
    $biz->save();

    return redirect('/polpost');
}
//END OF CREATE POLITICS POST





// CREATE ENTERTAINMENT POST STARTS

public function createEnt(Request $req){ 
    $data = $req->validate([
        "title"=>"Required",
        "summary"=>"Required",
        "body"=>"Required",
        "tag"=>"Required",
        "file1"=>"Required",
        "file2"=>"Required",
    ]);
    $title = $req->input('title');
    
    $filename1 = time().".".$req->file1->getClientOriginalExtension();
    $filename2 = time().".".$req->file2->getClientOriginalExtension();

     $req->file1->move("entdoc", $filename1);
     $req->file2->move("entdoc", $filename2);
 
    $biz = new Entertainment;
    $biz->title = $req->title;
    $biz->body = $req->body;
    $biz->tag = $req->tag;
    $biz->summary = $req->summary;
    $biz->file1 = $filename1;
    $biz->file2 = $filename2;
    $biz->user_id = auth()->id();
    $biz->save();
    
    return redirect('/entpost');
}
//END OF CREATE ENTERTAINMENT POST




// CREATE SPORTS POST STARTS
public function createSpt(Request $req){
   $filename1 = time().".".$req->file1->getClientOriginalExtension();
   $filename2 = time().".".$req->file2->getClientOriginalExtension();

   $req->file1->move("sportDoc",$filename1);
   $req->file2->move("sportDoc",$filename2);

   $sport = new Sport;
   $sport->title = $req->title;
   $sport->tag = $req->tag;
   $sport->summary = $req->summary;
   $sport->body = $req->body;
   $sport->user_id = auth()->id();
   $sport->file1 = $filename1;
   $sport->file2 = $filename2;
   $sport->save();
   return redirect('/sptpost');
}

//END OF CREATE SPORTS POST STARTS


// CREATE LATEST POST STARTS
public function createLatest(Request $req){
    $filename1 = time().".".$req->file1->getClientOriginalExtension();
    $filename2 = time().".".$req->file2->getClientOriginalExtension();
 
    $req->file1->move("latestDoc",$filename1);
    $req->file2->move("latestDoc",$filename2);
 
    $latest = new Latest;
    $latest->title = $req->title;
    $latest->tag = $req->tag;
    $latest->summary = $req->summary;
    $latest->body = $req->body;
    $latest->user_id = auth()->id();
    $latest->file1 = $filename1;
    $latest->file2 = $filename2;
    $latest->save();
    return redirect('/latestpost');
 }
 
 //END OF CREATE LATEST POST STARTS
 
 
 //NEWSLETTER EVENT AND LISTENER CONTROLLER STARTS


 public function newsletter(Request $req) {
    $req->validate([
       "email"=>"Required",
    ]);


    event(new userSubscribed($req->email));
    return back();
  }

  //NEWSLETTER EVENT AND LISTENER CONTROLLER ENDS

}
