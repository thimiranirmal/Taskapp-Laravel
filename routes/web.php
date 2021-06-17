<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
    $data=App\Models\Task::all();
    return view('home')->with('taskall',$data) ;
});
Route::post('/saveTask','TaskController@store');

Route::get('/markdone/{id}','TaskController@completed');
Route::get('/marknotdone/{id}','TaskController@notcompleted');
Route::get('/delete/{id}','TaskController@delete');
Route::get('/update/{id}','TaskController@updatetask');
Route::post('/updatetask','TaskController@updatetasks');