<?php
use App\student;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create s
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});


Route::get('/create/student','StudentController@create');
Route::post('/save/student','StudentController@save');
Route::get('/create/products','ProductsControllers@create');
Route::get('/save/products','ProductsControllers@save');
Route::get('/first', function () {
    $student=new student();
    $student->firstName ='Nandom';
    $student->lastName ='Mamdam';
    $student->address ='nhub';
    $student->depatment ='low';
    $student->gender = 'male';
    $student->save();
    return view('first');
});
Route::get('create/search','ProductsControllers@searchProduct');
Route::post('/save/search','ProductsControllers@search2');


//my Todo application 
Route::get('/index','TodoController@index');
Route::post('/addtodo','TodoController@add');
Route::get('/edit/{id}','TodoController@edit');
Route::post('/edit/{id}','TodoController@update');
Route::get('/remove/{id}','TodoController@remove');
Route::get('/mark/{id}','TodoController@mark');
Route::get('/markall','TodoController@markall');
Route::get('/removeall','TodoController@removeall');



