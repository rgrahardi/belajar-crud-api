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

Route::get('/produs', function(){
    return response()->json(
        [
            "message" => "Get Method Success"
        ]);

});

Route::post('/produk/', function(){
    return response()->json([
        "message" => "Post Method Success"
    ]);
});

Route::put('/produk/{id}', function($id){
    return response()->json([
        "message" => "Put Method Success" . $id
    ]);
});


Route::delete('/produk/{id}', function($id){
    return response()->json([
        "message" => "Delete Method Success"  . $id
    ]);
});