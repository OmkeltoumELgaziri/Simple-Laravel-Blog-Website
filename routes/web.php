<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'homepage']);



/*Route::get('begone-cache','AdminController@begoneCache');*/



Route::get('/home',[AdminController::class, 'index'])->name('home');

Route::get('/post_page',[Admincontroller::class,'post_page']);

Route::post('/add_post',[Admincontroller::class,'add_post'])->name('add_post');

/* ROUTE FOR SHOW POST */
Route::get('/show_post',[Admincontroller::class,'show_post']);

/* ROUTE FOR DELETE POST */
Route::get('/delete_post/{id}',[Admincontroller::class,'delete_post']);

/* ROUTE FOR PAGE THAT WILL GO TO EDIT PAGE */
Route::get('/edit_page/{id}',[Admincontroller::class,'edit_page']);

/* ROUTE FOR UPDATE FORM THAT IN EDIT PAGE  */
Route::post('/update_post/{id}',[Admincontroller::class,'update_post']);

/* ROUTE FOR THAT READ MORE BUTTON THAT WE'LL SHOW THE POST'S DETAILS */
Route::get('/post_details/{id}',[HomeController::class,'post_details']);

/* ROUTE FOR THAT CREATE POST BUTTON THAT WE'LL HELP US TO CREATE NEW POST AFTER REGISTRATION */
Route::get('/create_post',[HomeController::class,'create_post'])->middleware('auth');

/* ROUTE FOR THE USER WHO WILL CREATE POST */
Route::post('/user_post',[HomeController::class,'user_post'])->middleware('auth');
/* ROUTE TO SHOW YOUR POST WHEN YOU CLIKC ON MY POST BUTTON */
Route::get('/my_post',[HomeController::class,'my_post'])->middleware('auth');

/* ROUTE TO DELETE YOUR POST WHEN YOU CLIKC ON DELETE BUTTON */
Route::get('/my_post_del/{id}',[HomeController::class,'my_post_del'])->middleware('auth');

/* ROUTE TO UPDATE YOUR POST WHEN YOU CLIKC ON UPDATE BUTTON */
Route::get('/post_update_page/{id}',[HomeController::class,'post_update_page'])->middleware('auth');
Route::post('/update_post_data/{id}',[HomeController::class,'update_post_data'])->middleware('auth');


/* ROUTE TO ACCEPT AND REJECT A POST */
Route::get('/accept_post/{id}',[AdminController::class,'accept_post']);
Route::get('/reject_post/{id}',[AdminController::class,'reject_post']);


Route::get('/admin/adminhome', function()
{

        return view('admin.adminhome');
})->name('admin.adminhome');


Route::get('/about',function()
{
        return view('home.about');
}

);

Route::get('/blog', function()
{

        return view('home.blog');
}
);