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

//Route::get('/', function () {
//    return view('welcome');
//});

//web
Route::get('/', 'ArticlesController@index');
Route::get('index', 'ArticlesController@index');
Route::get('products', 'ArticlesController@showProducts');
Route::get('news', 'ArticlesController@showNews');
Route::get('new/{id}', 'ArticlesController@showNew');
Route::get('about', 'ArticlesController@showAbout');

Route::get('new', function () {
    return view('new');
});


//api
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Api\Controllers'], function ($api) {

        $api->get('t', 'ArticlesController@all');
        $api->get('all/articles', 'ArticlesController@allTitles');
        $api->get('add_article', 'ArticlesController@store');

        $api->get('lo', function (){
            //	{"id":1,"username":"admin","avatar":"https://raw.githubusercontent.com/taylorchen709/markdown-images/master/vueadmin/user.png","name":"张某某"}
            return json_encode([
                "msg" => "",
                "code" => 200,
                "user" => [
                "id" => 1,
                "name" => "zhang",
                "username" => "admin",
                "avatar" => "https://raw.githubusercontent.com/taylorchen709/markdown-images/master/vueadmin/user.png"]
            ]);
        });

        $api->post('user/login', 'AuthController@authenticate');

        $api->group(['middleware' => 'jwt.auth'],function ($api){

        });
    });

});


