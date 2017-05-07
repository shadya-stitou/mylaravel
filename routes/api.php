<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'admin'], function () {
 Route::get('/users', function(){


 $data=App\Item::all()->toArray();

 return dd($data);


 
           }) ;




Route::get('users/{id}', function($id){



 $el=App\Item::where('id','=',$id)->get()->toArray();

 return dd($el);
});
});