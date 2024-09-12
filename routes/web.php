<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\commentControl;
use App\Http\Controllers\postController;
use App\Http\Controllers\testController;
use App\Http\Controllers\userController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\eventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|ewds
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*BLOGINDEX PAGE ROUTE FOR USERS*/

/*
THIS IS THE PAGE ONE OF THE APROKO.NG APPLICATION, THIS  ROUT IS LIKE A GATE THAT LEADS TO
EVERYWHERE ON THIS APP. 

*/

Route::get("/blogindex",[viewController::class,"indexFunction"]);
Route::get("/",[viewController::class,"indexFunction2"]);

/*BLOGINDEX ROUTE FOR USERS ENDS*/





/* Original Page Extensions/Master Page */
Route::view("/single","blog.singlePageMaster");
Route::view("/category","blog.categoryMaster");
/* End Of Original Page Extensions/Master Page */



/* All Blog Routes*/


/*ADMIN FRONT PAGE ROUTE*/



/* ADMIN VIEW ROUTES POSTS MIDDLEWARE STARTS*/
Route::GROUP(["middleware"=>["adminAccess"]], function(){
 
 Route::get("/admin",[viewController::class,"adminDash"]);
 Route::get("/bizpost",[viewController::class,"bizView"]);
 Route::get("polpost",[viewController::class,"polView"]);
 Route::get("/sptpost",[viewController::class,"viewSportAdmin"]);
 Route::get("/entpost",[viewController::class,"viewEntPost"]);
 Route::get("/foodpost",[viewController::class,"viewFoodPost"]);
 Route::get("/latestpost",[viewController::class,"viewLatestPost"]);

});

Route::get("deleteUser/{id}",[viewController::class,"deleteUser"]);

/* ADMIN POSTS MIDDLEWARE ENDS*/


/*END OF ADMIN ROUTES */



/*REGISTRATION,LOGIN AND LOGOUT ROUTES*/
Route::POST("/register",[userController::class,"Register"]);
Route::POST("/login",[userController::class,"Login"]);
Route::view("register","blog.register");
Route::view("/loginform","blog.login");
Route::get("/logout",[userController::class,"Logout"]);
/* End Of Blog Routes*/


/*Post Controller Create Routes*/
Route::Post('/createBizPost',[postController::class,"createBiz"]);
Route::Post('/createFoodPost',[postController::class,"createFood"]);
Route::Post('/createPolPost',[postController::class,"createPol"]);
Route::Post('/createEntPost',[postController::class,"createEnt"]);
Route::Post('/createSptPost',[postController::class,"createSpt"]);
Route::Post('/createLatestPost',[postController::class,"createLatest"]);
/*End Of Post Controller Create Routes*/



/*ADMIN UPDATE AND EDIT ROUTES*/

//ADMIN BUSINESS ROUTES
Route::Post("/update",[viewController::class,"bizUpdate"]);
Route::get("/editBiz/{id}",[viewController::class,"bizEdit"]);
Route::get("/delete/{id}",[viewController::class,"deleteBiz"]);
//Route::get("/bizpost",[viewController::class,"bizView"]);

//ADMIN POLITICS ROUTES
Route::get("editPol/{id}",[viewController::class,"polEdit"]);
Route::Post("polUpdate",[viewController::class,"polUpdate"]);
//Route::get("polpost",[viewController::class,"polView"]);
Route::get("deletePol/{id}",[viewController::class,"deletePol"]);

//ADMIN SPORTS ROUTES
//Route::get("/sptpost",[viewController::class,"viewSportAdmin"]);
Route::get("/edit/{id}",[viewController::class,"editSport"]);
Route::get("/deleteSpt/{id}",[viewController::class,"deleteSport"]);
Route::Post("/updateSpt",[viewController::class,"updateSport"]);


//ADMIN ENTERTAINMENT ROUTES
//Route::get("/entpost",[viewController::class,"viewEntPost"]);
Route::get("/editEnt/{id}",[viewController::class,"editEntPost"]);
Route::get("/delete/{id}",[viewController::class,"deleteEnt"]);
Route::POST("/updateEnt",[viewController::class,"updateEnt"]);

//ADMIN FOOD ROUTES
//Route::get("/foodpost",[viewController::class,"viewFoodPost"]);
Route::get("editfood/{id}",[viewController::class,"editFood"]);
Route::POST("/updateFood",[viewController::class,"updateFood"]);
Route::get("deletefood/{id}",[viewController::class,"deleteFood"]);

//ADMIN LATEST ROUTES
//Route::get("/latestpost",[viewController::class,"viewLatestPost"]);
Route::get("/editlatest/{id}",[viewController::class,"editLatest"]);
Route::get("/deletelatest/{id}",[viewController::class,"deleteLatest"]);
Route::POST("/updatelatest",[viewController::class,"updateLatest"]);


/*ADMIN VIEW, UPDATE AND EDIT ROUTES ENDS HERE*/



/* VIEW SINGLE PAGE CONTROLLER ROUTES*/

/* MIDDLEWARE ROUTE BEGINS*/
    Route::GROUP(["middleware"=>"protected"],function() {
    Route::get("/bizPostView/{id}",[viewController::class,"viewBiz"]);
    Route::get("/polPostView/{id}",[viewController::class,"viewPol"]);
    Route::get("/foodPostView/{id}",[viewController::class,"viewFood"]);
    Route::get("/entPostView/{id}",[viewController::class,"viewEnt"]);
    Route::get("/sptPostView/{id}",[viewController::class,"viewSport"]);
    Route::get("/latestPostView/{id}",[viewController::class,"viewLatest"]);
    
});
/* MIDDLEWARE ROUTE ENDS*/


/* VIEW SINGLE PAGE CONTROLLER ROUTES ENDS*/







/*COMMENT CONTROLLER ROUTES STARTS*/
Route::Post("/comment",[commentControl::class,"polComment"]);
Route::Post("/fcomment",[commentControl::class,"foodComment"]);
Route::Post("/entcomment",[commentControl::class,"entComment"]);
Route::Post("/lcomment",[commentControl::class,"latestComment"]);
Route::Post("/bizcomment",[commentControl::class,"bizComment"]);
Route::Post("/sptcomment",[commentControl::class,"sptComment"]);

/*COMMENT CONTROLLER ROUTES ENDS*/

/*COMMENT BACK BUTTONS CONTROLLER ROUTES STARTS*/
Route::get("/foodpost/{id}",[commentControl::class,"back2Food"]);



/*COMMENT CONTROLLER ROUTES ENDS*/


/*EVENT CONTROLLER STARTS HERE*/

Route::Post("newsletter",[postController::class,"newsletter"]);

/*EVENT CONTROLLER ENDS HERE*/



 
 