<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Events\userSubscribed;
use App\Mail\userSubscribedMail;
use Illuminate\Support\Facades\Mail;

class testController extends Controller
{
    
       public function newsletter(Request $req) {
         $req->validate([
            "email"=>"Required",
         ]);

         $news = new Newsletter;
         $news->email = $req->email;
         $news->save();

         event(new userSubscribed($req->email));
         Mail::to($req->email)->send(new userSubscribedMail());


         return back();
       }
}
