<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

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
    return view('Home');
})->name('home');
Route::get('/Contact', function () {
    return view('Contact');
})->name('contact');
Route::get('/Skills', function () {
    return view('Skills');
})->name('skills');
Route::get('/post/create',function()
{   
    DB::table('post')->insert([
        'ID' => 1,
        'title' => 'lab4',
        'body' => 'CVwebsite',
        'timestamp'=> '2021-02-23 12:11:01'
    ]);
});
