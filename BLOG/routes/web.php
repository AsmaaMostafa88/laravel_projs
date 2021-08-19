<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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
    $posts=[["id"=>1,"posted_by"=>"Asmaa","title"=>"Learn PHP","created_at"=>"2018-04-10"]
    ,["id"=>2,"posted_by"=>"Mohamed","title"=>"solid principles","created_at"=>"2020-04-06"]
    ,["id"=>3,"posted_by"=>"nadia","title"=>"Design Patterns","created_at"=>"2019-06-04"]];
    return view('welcome',compact('posts'));
});
Route::get('/create', function () {
    
    return view('create');
});
Route::get('/edit', function () {
    
    return view('edit');
});
Route::get('/show', function () {
    $dt = Carbon::create(2021, 8, 12,22, 16, 20);
     

    
    return view('show',compact('dt') );
});

