<?php

use Illuminate\Support\Facades\Route;
use illuminate\Http\Request;

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

/*
Route::get();
Route::post();
Route::put();
Route::patch();
Route::delete();
Route::option();
*/

//Route::match(['get', 'post'],'/', function(){
//    return 'POST and GET is allowed';
//});

//Route::view('/web', 'welcome');

Route::get('/', function () {
    return 'welcome';
});

//Route::redirect('/home', '/website');

/*Route::get('/users', function(Request $request){
    dd($request);
    return 'requested';
}); */


/*Route::get('/get-text', function(){       //response
    return response('Hello...', 200)
        ->header('content-Type', 'text/plain');
});*/

/* 
Route::get('/user/{id}', function($id){     //if 1 parameter
    return response($id, 200);
});*/


/*
Route::get('/user/{id}/{name}', function($id, $name){     //if 2 or more parameter
    return response($id.' | '.$name, 200);
});*/


Route::get('/request-json', function(){     //request to user json file
    return response() ->json(['name' => 'angelorenz', 'age' => '20']);
});

Route::get('/request-download', function(){     //request to user to download
    $path = public_path().'/sample.txt';
    $name = 'sample.txt';
    $headers = array(
        'Content-Type : application/text-plain',
    );
    return response() ->download($path,$name,$headers);
});