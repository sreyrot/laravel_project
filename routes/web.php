<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lesson', function(){
    return view('page.lesson');
});

// in controller
Route::get('/action', 'PageController@action' )->name('action');
Route::get('/join', 'PageController@join' )->name('join');
Route::get('/about', 'PageController@about' )->name('about');
Route::get('/contact', 'PageController@contact' )->name('contact');
Route::get('/customer', 'PageController@shoCustomer' )->name('customer');










    // test
// create new route
Route::get('/teacher/{index}',function($index){
    // create new array
    $result = " ";
    $teachers = array("Channak","Ronan","Shieha","Rady","Rith");
    if($index < sizeof($teachers)){
    echo "This teacher is : " . $teachers[$index];
    }else{
    echo "This array is :";
    for($i= 0 ; $i < sizeof($teachers); $i++){
    $countIndex = sizeof($teachers) -1;
    if($i < $countIndex){
    echo "[$i] " .$teachers[$i]. ", ";
    }else{
    echo "[$i] " .$teachers[$i];
    }
    $result = "<br>  No teacher with this index: ".$index ." <br>  The largest index is :".$countIndex;
    }
    return $result;
    // echo "<br>";
    // echo "No Teacher with this index: " .$index."\n";ZX
    // echo "<br>";
    // echo "The largest index is :" . $countIndex;
    }
    
    });


