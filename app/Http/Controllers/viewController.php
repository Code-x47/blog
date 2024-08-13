<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Sport;
use App\Models\Latest;
use App\Models\Business;
use App\Models\fComment;
use App\Models\Politics;
use App\Models\Bizcomment;
use App\Models\entComment;
use App\Models\polComment;
use App\Models\Sportcomment;
use Illuminate\Http\Request;
use App\Models\Entertainment;
use App\Models\Latestcomment;
use Illuminate\Support\Facades\Auth;

class viewController extends Controller
{

/*ADMIN DEMO METHODS STARTS*/


 public function adminDash() {
 
   $admin = auth()->user()->get();
   $admin2 = auth()->user()->get();
   $users = auth()->user()->get();
   return view("blog.admin",compact("admin","admin2","users"));
}

public function deleteUser($id) {
   $this->authorize("task_delete");
   $deleteUser = User::find($id);
   $deleteUser->delete();
   return redirect()->back();
}


/*ADMIN DEMO METHODS ENDS*/




/*BUSINESS POST RELATED METHODS STARTS*/
   
   //ADMIN DASHBOARD BUSINESS VIEW SECTION
   function bizView(){
    $bizview = Business::all();
    $manageBiz = Business::all();
    $admin = auth()->user()->get();
    $admin2 = auth()->user()->get();

    return view("blog.bizPost",compact("bizview","manageBiz","admin","admin2"));
   }

   function bizEdit($id){
    $this->authorize("task_edit_post");
    $edit = Business::find($id);
    return view("blog.updateBiz",["editView"=>$edit]);
        
   }

   function bizUpdate(Request $req){
        $filename1 = time().".".$req->file1->getClientOriginalExtension();
        $filename2 = time().".".$req->file2->getClientOriginalExtension(); 
        $req->file1->move("bizdoc",$filename1);
        $req->file2->move("bizdoc",$filename2);

        $bizdata = Business::find($req->id);
        $bizdata->title = $req->title;
        $bizdata->summary = $req->summary;
        $bizdata->body = $req->body;
        $bizdata->tag = $req->tag;
        $bizdata->file1 = $filename1;
        $bizdata->file2 = $filename2;
        $bizdata->save();

        return redirect('/bizpost');
   }

function deleteBiz($id){
   $data = Business::find($id);
   $data->delete();

   return redirect('/bizpost');
}

// USER/INDEX BUSINESS VIEW SECTION 
function viewBiz($id){
 $viewbiz = Business::find($id);
 $viewtrends = Business::all();
 $vComment = Bizcomment::all();
 $countComments = BizComment::all()->count();
 $popular = Latest::all();
 $flicker = Latest::all();
 return view("blogViews.bizView",compact('viewbiz','viewtrends',"vComment","countComments","popular","flicker")); 
}


/*BUSINESS POST RELATED METHODS STARTS*/


/*POLITICS POST RELATED METHODS STARTS*/


//ADMIN POLITICS VIEW SECTION
function polView(){
   $view = Politics::all();
   $admin = auth()->user()->get();
   $admin2 = auth()->user()->get();

   return view("blog.polPost",compact("view","admin","admin2"));
   
}

function polEdit($id){
   $edit = Politics::find($id);

   if(auth()->id() != $edit['user_id']){
      return response([
        "You Cannot Edit this Post",
      ]);
      }

   return view("blog.updatePol",compact('edit'));
}

function deletePol($id){
  $delete = Politics::find($id);
  $delete->delete();
  return redirect("polpost");
}
  public function polUpdate(Request $req){
   $req->validate([
    "title"=>"Required",
    "tag"=>"Required",
    "summary"=>"Required",
    
   ]); 


   $filename1 = time().".".$req->file1->getClientOriginalExtension();
   $filename2 = time().".".$req->file2->getClientOriginalExtension(); 
   $req->file1->move("poldoc",$filename1);
   $req->file2->move("poldoc",$filename2);


   $data = Politics::find($req->id);
   $data->title = $req->title;
   $data->summary = $req->summary;
   $data->tag = $req->tag;
   $data->body = $req->body;
   $data->file1 = $filename1;
   $data->file2 = $filename2;

   $data->save();
   return redirect('polpost');
 } 


//THIS viewPol() METHOD IS IN-CHARGE OF polView.blade.php View;

// USER/INDEX POLITICS VIEW SECTION  
function viewPol($id){
   $viewpost = Politics::find($id);
   $viewtrends = Politics::all();
   $vComment = polComment::all();
   $countComments = polComment::all()->count();
   $popular = Latest::all();
   $flicker = Latest::all();
   return view("blogViews.polView",compact("viewpost","viewtrends","vComment","countComments","popular","flicker"));
   
}

/*POLITICS POST RELATED METHODS ENDS*/


// USER/INDEX FOOD VIEW SECTION
function viewFood($id){
   $viewpost = Food::find($id);
   $viewtrends = Food::all();
   $vComment = fComment::all();
   $countComments = fComment::all()->count();
   $popular = Latest::all();
   $flicker = Latest::all();
   return view("blogViews.foodView",compact("viewpost","viewtrends","vComment","countComments","popular","flicker"));
   }


   // USER/INDEX ENTERTAINMENT VIEW SECTION
   function viewEnt($id){
      $viewpost = Entertainment::find($id);
      $viewtrends = Entertainment::all();
      $vComment = entComment::all();
      $countComments = entComment::all()->count();
      $popular = Latest::all();
      $flicker = Latest::all();
      return view("blogViews.entView",compact("viewpost","viewtrends","vComment","countComments","popular","flicker"));
      }



   // USER/INDEX SPORTS VIEW SECTION
      function viewSport($id){
         $viewpost = Sport::find($id);
         $viewtrends = Sport::all();
         $vComment = Sportcomment::all();
         $countComments = Sportcomment::all()->count();
         $popular = Latest::all();
         $flicker = Latest::all();
         return view("blogViews.sportView",compact("viewpost","viewtrends","vComment","countComments","popular","flicker"));
         }

     //ADMIN SPORTS VIEW SECTION
      public function viewSportAdmin(){
         $view = Sport::all();
         $admin = auth()->user()->get();
         $admin2 = auth()->user()->get();

         return view("blog.sportsPost",compact("view","admin","admin2"));

      }

      public function editSport($id){
         $edit = Sport::find($id);
         return view("blog.updateSport",compact("edit"));

      }

      public function deleteSport($id){
        $delete = Sport::find($id);
         $delete->delete();
         return redirect('/sptpost');
      }
      public function updateSport(Request $req){
        $req->validate([
         "title"=>"Required",
         "tag"=>"Required",
         "summary"=>"Required",
         
        ]); 


        $filename1 = time().".".$req->file1->getClientOriginalExtension();
        $filename2 = time().".".$req->file2->getClientOriginalExtension(); 
        $req->file1->move("sptDoc",$filename1);
        $req->file2->move("sptDoc",$filename2);


        $data = Sport::find($req->id);
        $data->title = $req->title;
        $data->summary = $req->summary;
        $data->tag = $req->tag;
        $data->body = $req->body;
        $data->file1 = $filename1;
        $data->file2 = $filename2;

        $data->save();
        return redirect('sptpost');
      } 


   // USER/INDEX LATEST VIEW SECTION
      function viewLatest($id){
         $viewpost = Latest::find($id);
         $viewtrends = Latest::all();
         $vComment = Latestcomment::all();
         $countComments = Latestcomment::all()->count();
         $popular = Latest::all();
         $flicker = Latest::all();
         return view("blogViews.latestView",compact("viewpost","viewtrends","vComment","countComments","popular","flicker"));
         }




//BLOGINDEX HOME PAGE CONTROLLER METHODS

function indexFunction2() {
   /*NEWS HEADLINE SECTION METHODS*/
   $indexView1 = Politics::where("id",1)->get();
   $indexView2 = Business::where("id",1)->get();
   $indexView3 = Entertainment::where("id",1)->get();
   $indexView4 = Entertainment::where("id",2)->get();
   $indexView5 = Business::where("id",4)->get();
   $indexView6 = Food::where("id",1)->get();
   $indexView7 = Sport::where("id",5)->get();
   
   /*LATEST NEWS METHOD*/
   $latest = Latest::all();
   $latest2 = Latest::all();
   $latest3 = Latest::all();
   
   /*TRENDING NEWS*/
   $trending = Latest::all();
   
   /*FOOTER*/
   $popular = Latest::all();
   $flicker = Latest::all();
   return view("blog.home",
   compact("indexView1","indexView2","indexView3","indexView4","indexView5","indexView6","indexView7","latest","latest2","latest3","trending","popular","flicker"));
      
   }
   
   
   






function indexFunction() {
   
   /*NEWS HEADLINE SECTION METHODS*/
   $indexView1 = Politics::where("id",1)->get();
   $indexView2 = Business::where("id",1)->get();
   $indexView3 = Entertainment::where("id",1)->get();
   $indexView4 = Entertainment::where("id",2)->get();
   $indexView5 = Business::where("id",4)->get();
   $indexView6 = Food::where("id",1)->get();
   $indexView7 = Sport::where("id",5)->get();
  /*LATEST NEWS METHOD*/
   $latest = Latest::all();
   $latest2 = Latest::all();
   $latest3 = Latest::all();
   /*TRENDING NEWS*/
   $trending = Latest::all();

   /*FOOTER*/
   $popular = Latest::all();
   $flicker = Latest::all();
 

   return view("blog.blogIndex",
   compact("indexView1","indexView2","indexView3","indexView4","indexView5","indexView6","indexView7","latest","latest2","latest3","trending","popular","flicker"));
   }

  
/*HEADLINE SECTION ENDS*/




/*FEATURED POST SECTION*/

/*FEATURED POST SECTION ENDS*/


//ADMIN ENTERTAINMENT VIEW SECTION
public function viewEntPost(){
   $view = Entertainment::all();
   $view2 = Entertainment::all();
   $admin = auth()->user()->get();
   $admin2 = auth()->user()->get();

   return view("blog.entPost",compact("view","view2","admin","admin2"));
}

public function editEntPost($id){
  $this->authorize("task_edit_post");
  $edit = Entertainment::find($id);
  
  return view("blog.updateEnt",compact("edit"));
  
}


public function updateEnt(Request $req) {
   
   $filename1 = time().".".$req->file1->getClientOriginalExtension();
   $filename2 = time().".".$req->file2->getClientOriginalExtension();
   
   $req->file1->move("entdoc",$filename1);
   $req->file2->move("entdoc",$filename2);
   
   $update = Entertainment::find($req->id);
   $update->title = $req->title;
   $update->summary = $req->summary;
   $update->tag = $req->tag;
   $update->body = $req->body;
   $update->file1 = $filename1;
   $update->file2 = $filename2;

   $update->save();
   return redirect('entpost');
   
}
 public function deleteEnt($id){
 $delete = Entertainment::find($id);
 $delete->delete();
 return redirect('entpost');
 }



//ADMIN FOOD VIEW SECTION
public function viewFoodPost(){
   $view = Food::all();
   $view2 = Food::all();
   $admin = auth()->user()->get();
   $admin2 = auth()->user()->get();

   return view("blog.foodPost",compact("view","view2","admin","admin2"));
}

public function editFood($id){
   $edit = Food::find($id);
   if(auth()->id() != $edit['user_id']){
    return response([
      "You Cannot Edit this Post",
    ]);
    
   }
   return view("blog.updateFood",compact("edit"));
}

public function updateFood(Request $req){
   $filename1 = time().".".$req->file1->getClientOriginalExtension();
   $filename2 = time().".".$req->file2->getClientOriginalExtension();
   
   $req->file1->move("foodDoc",$filename1);
   $req->file2->move("foodDoc",$filename2);
   
   $update = Food::find($req->id);


   $update->title = $req->title;
   $update->summary = $req->summary;
   $update->tag = $req->tag;
   $update->body = $req->body;
   $update->file1 = $filename1;
   $update->file2 = $filename2;

   $update->save();
   return redirect('foodpost');
   
 }

 public function deleteFood($id){
   $delete = Food::find($id);
   $delete->delete();
   return redirect()->back();
 }

 //ADMIN LATEST VIEW SECTION

 public function viewLatestPost() {
   $view = Latest::all();
   $view2 = Latest::all();
   $admin = auth()->user()->get();
   $admin2 = auth()->user()->get();

   return view("blog.latestPost",compact("view","view2","admin","admin2"));
 }

 public function editLatest($id){
   $edit = Latest::find($id);

   if(auth()->id() != $edit['user_id']){
      return response([
        "You Cannot Edit this Post",
      ]);
      }
      return view("blog.updateLatest",compact("edit"));
 }

 public function deleteLatest($id) {
   $delete = Latest::find($id);
   $delete->delete();
   return redirect()->back();
}

public function updateLatest(Request $req) {
   $filename1 = time().".".$req->file1->getClientOriginalExtension();
   $filename2 = time().".".$req->file2->getClientOriginalExtension();

   $req->file1->move("latestDoc",$filename1);
   $req->file2->move("latestDoc",$filename2);

   $update = Latest::find($req->id);
   $update->title = $req->title;
   $update->tag = $req->tag;
   $update->summary = $req->summary;
   $update->body = $req->body;
   $update->file1 = $filename1;
   $update->file2 = $filename2;
   $update->save();
   
   return redirect('latestpost');

}



}
