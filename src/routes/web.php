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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello World';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/greeting', 'greeting',['name' => 'James']);

Route::get('/greeting2',function(\Illuminate\Http\Request $request){
    if (View::exists('greeting')){
        return view('greeting')->with('name','wjh 2017-12-05 ');
    }else{
        return response('greeting', 200)->header('Content-Type', 'text/plain');;
    }
});

Route::get('/api', function(){
    return \App\Models\Person::all()->first()->toArray();
});

Route::get('welcome/{locale}', function ($locale) {
    //App::setLocale($locale);
    var_dump(App::getLocale());
    echo __('passwords.password');
    die;
});


//person
Route::get('/person', 'PersonController@index');
Route::get('/person/zr', 'PersonController@zr');
Route::get('/person/index', 'PersonController@index');
Route::get('/person/create', 'PersonController@create');
Route::any('/person/store', 'PersonController@store');
Route::get('/person/{id}', 'PersonController@show')->name('person.show');
Route::get('/person/{id}/edit', 'PersonController@edit');
Route::any('/person/{id}/update', 'PersonController@update');
Route::any('/person/{id}/deleteMsg', 'PersonController@deleteMsg');

//视图路由
Route::view('/person/view/{id}', 'person.view',['person'=>\App\Models\Person::all()->first()]);

//路由参数
Route::get('/person/name/{name}/id/{id}', function ($name, $id) {
    var_dump($name,$id);
})->where('id','[0-9]+');


Route::get('/service/person/index', 'Service\PersonController@index');
Route::get('/service/person/check', 'Service\PersonController@check')->middleware('check.age');

//中间件参数
Route::get('/service/person/check2', 'Service\PersonController@check2')->middleware('check.ageWithName:wjh');

Route::get('/service/person/phpinfo', 'Service\PersonController@phpinfo');


Route::any('/photos/xx', 'PhotoController@xx');

Route::resource('photos', 'PhotoController');



//person
Route::get('/wx', 'WeixinController@index');//pageAccessToken
Route::get('/wx/xx', 'WeixinController@xx');
Route::get('/wx/pageAccessToken', 'WeixinController@pageAccessToken');

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
//shop Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('shop','\App\Http\Controllers\ShopController');
  Route::post('shop/{id}/update','\App\Http\Controllers\ShopController@update');
  Route::get('shop/{id}/delete','\App\Http\Controllers\ShopController@destroy');
  Route::get('shop/{id}/deleteMsg','\App\Http\Controllers\ShopController@DeleteMsg');
});

//invoice Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('invoice','\App\Http\Controllers\InvoiceController');
  Route::post('invoice/{id}/update','\App\Http\Controllers\InvoiceController@update');
  Route::get('invoice/{id}/delete','\App\Http\Controllers\InvoiceController@destroy');
  Route::get('invoice/{id}/deleteMsg','\App\Http\Controllers\InvoiceController@DeleteMsg');
});
