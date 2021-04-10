<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormtableController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\SendController;
use App\Models\Formtable;
use Illuminate\Support\Facades\App;


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
Route::get('/post',function()
{
    $post = Post::find(1);
    return  $post;
});
Route::get('blog',[BlogController::class, 'index']);
Route::get('blog/create',function()
{
    return view('blog.create');
});
Route::post('blog/create',[BlogController::class,'store'])->name('add-blog');

Route::get('/post/{id}',[BlogController::class,'get_blog']);
Route::get('/testcase',function()
{
    return 'Success';
});
Route::post('formtable/create',[FormtableController::class,'createform'])->name('create-form');
Route::get('formtable/create',function()
{
    return view('form.createform');
});
Route::get('formtable',[FormtableController::class,'display']);
Route::get('mail/send',[SendController::class,'send']);
Route::get('example/{lang}',function($lang)
{
    App::setlocale($lang);
    return view('justforlang');
}); 



Route::get('/{lang}',[LocalizationController::class,'index']);