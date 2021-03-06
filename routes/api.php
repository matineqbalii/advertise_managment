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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return auth()->user();
//});


Route::group([ 'namespace'=>'Api\v1' , 'prefix'=>'v1'],function (){
    $this->get('articles','ArticleController@articles');
    $this->post('comments','ArticleController@comments');
    $this->post('login','UserController@login');

    Route::middleware('auth:api')->group(function(){
        $this->get('/user', function (Request $request) {
            return auth()->user();
        });
    });

});
