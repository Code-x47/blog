<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    Public function Register(Request $req){
         $validate = $req->validate([
           "name"=>"Required",
           "email"=>"Required",
           "password"=>"Required",
           "country"=>"Required",
         ]);


         $profilePix = $req->input('name');
         $filename = $profilePix.".".$req->file->getClientOriginalExtension();
         $req->file->move("docs",$filename);
         $user = new User;
         $user->name = $req->name;
         $user->email = $req->email;
         $user->password = Hash::make($req->password);
         $user->country = $req->country;
         $user->pics = $filename;
         $user->save();

         // auth()->login($user);

         return redirect("/loginform");
    }


  Public function Logout(){
     auth()->logout();
     return redirect('/');
  }

    Public function Login(Request $req){
        $validator = $req->validate([
           "userEmail"=>"Required",
           "userPassword"=>"Required"
        ]);

     if(auth()->attempt([
      "email"=>$validator["userEmail"],
      "password"=>$validator["userPassword"]
      ])){
          $userAuth = auth()->user()->usertype;
           if($userAuth === "1"){
           return redirect("/admin");
           }
           else {
            return redirect("/blogindex");
           }

           return redirect()->back();


   }

    }


}
