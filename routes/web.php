<?php

use Illuminate\Support\Facades\Route;

//1
use Illuminate\Support\Facades\DB;
//2
use App\Models\Client;
//3
use App\Models\Post;
//4
use App\Http\Controllers\ClientController;
//5
use App\Http\Controllers\BlogController;

// use App\Http\Controllers\EmployeeController;
// use App\Models\Employee;
//lab8
use App\Http\Controllers\StudentController;





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
    return view('welcome');
});

Route::get('/portfolio', function () {
    return view('Portfolio');
});

Route::get('user', function(){
    return view('user');
});
Route::get('home', function(){
    return 'home';
});
/////lab4_1
//// php artisan make:migration create_clients_table
////php artisan make:model Client
//changwd route;
Route::get('client/add',function(){
    DB::table('clients')->insert([
        'name'=>'Medet',
        'lastname'=>'Kurganbayev',
        'age'=>19 
    ]);
});

Route::get('client', [ClientController::class,'index']);

Route::get('client/create',function(){
    return view('client.create');
});

Route::post('client/create', [ClientController::class, 'store'])->name('add-client');

///////lab4_2
////////////php artisan make:migration create_post_table
///php artisan make:model Post

Route::get('post/create',function(){
    DB::table('post')->insert([
        'title'=>'Cars',
        'body'=>'Super car'
    ]);
});

Route::get('/post', [BlogController::class, 'index']);

Route::get('post/create1', function(){
    return view('blog.create');
});
//action route
Route::post('post/create1', [BlogController::class, 'store'])->name('add-post');
// Route::get('/post',function(){
//     $p = Post::find(1);
//     return $p;//->title;
// });

////lab5////////////////
//php artisan make:controller ClientController


/////////lab 6
////php arisan make:test ClientTest;
////was changing$$$$$$$$$$$$$
//Route::get('client/{id}',[ClientController::class, 'get_client']);
///lab6 fo Post
///php artisan make:test PostTest//

Route::get('post/{id}',[BlogController::class, 'get_post']);

//lab7
//api    php artisan make:controller ApiPostController

///lab8
//Route::get('/employee',[EmployeeController::class, 'index']);
//Route::get('/human','App\Http\Controllers\HumanController@index');

//Route::post('/addimage',[EmployeeController::class, 'store'])->name('addimage');
///////////////////// uploading

Route::get('/add-student',[StudentController::class,'addStudent']);
Route::post('/add-student',[StudentController::class,'storeStudent'])->name('student-store');

Route::get('/all-student',[StudentController::class,'students']);
//send email
