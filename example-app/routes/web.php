<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newController;
use App\Http\Controllers\FormHandler;
use Illuminate\Http\Request;
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
// basic routing starts
// function 
Route::get('/reply',function(){
    echo "Hello Newbie";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form',function(){
    return view('form');
});

// View 
Route::view('Form','form');

// controller 
Route::get('process',[newController::class,'setname']);
// basic routing ends

// Advance routing start
Route::get('/users/{fname}',function($fname){
    echo  $fname;
});

Route::get('/{action}/{v1}/{v2}',function($action,$v1,$v2){
    if($action == "Add"){
        echo $v1 + $v2;
    }elseif($action == "Sub"){
        echo $v1 - $v2;
    }elseif($action == "Mul"){
        echo $v1 * $v2;
    }elseif($action == "Div"){
        echo $v1 / $v2;
    }
})->where(['v1'=>'[0-9]+'],['v2'=>'[0-9]+']);

Route::get('/name/{name}',function($name){
    echo $name;
})->where(['name'=>'[A-Za-z]+']);

Route::post('formSubmit',[FormHandler::class,'FormSubmission']);

Route::post('Process',function(Request $req){
    echo $req->email;
});