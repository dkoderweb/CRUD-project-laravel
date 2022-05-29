<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

 /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::group(['middeleware'=>"web"],function(){
    Route::get('/',[ProjectController::class,'index']);
Route::view('home','home');
Route::view('add','add');

Route::get('list',[ProjectController::class,'list']);
Route::post('Restaurant_added',[ProjectController::class,'ADD']);
Route::get('delete/{id}',[ProjectController::class,'delete']);
Route::get('edit/{id}',[ProjectController::class,'edit']);
Route::post('Updated',[ProjectController::class,'update']);
Route::view('register','register');
Route::view('login','login');
Route::post('login',[ProjectController::class,'login']);
 Route::view('updatepassword','updatepassword');



Route::post('passwordreset',[ProjectController::class,'reset']);

Route::view('reset','reset');
Route::post('update_pass',[ProjectController::class,'update_pass']);
// Route::view('update_pass','update_pass');





Route::post('register',[ProjectController::class,'register']);
 

});
Route::get('/logout', function () {
    if(Session::get('user')){
        session()->pull('user');
    }
    Session::flash('logout',"You are logged out!");

    return redirect('login');
});
 




 