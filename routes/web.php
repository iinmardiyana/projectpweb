<?php

use App\Http\Controllers\DashboardPost;
use App\Http\Controllers\postController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\postl;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\DashboardServiceController;

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

// Route::get('/home', function () {
//     return view('home', [
//         "title" => "home",
//         "Location" => "Asrama Putri Al Hidayah Dusun Manggisan RT 1 RW 2 Desa Plosokandang Kec. Kedungwaru, Kab. Tulungagung (Belakang STKIP Tulungagung)",
//         "Email" => "zap.group.official@gmail.com"
//     ]);
// });

Route::get('/home', [PostController::class, 'index']);

#Setelah menggunakan controller
// Route::get('/about',[postController::class,'index']);
Route::get('/service', function () {
    return view('service', [
        "title" => "Service",
        "name" => " "
    ]);
});

Route::get('/faq', function () {
    return view('faq', [
        "title" => "FAQ",
        "name" => " "
    ]);
});

Route::get('/contactus', function () {
    return view('contactus', [
        "title" => "Contact Us",
        "name" => " "
    ]);
});

#Route::get('/about', function(){
#    return view('about',[
#        "title" => "about",
#        "post" => post::all()
#    ]);

#});
##Sebelum menggunakan controller
// Route::get('/about/{slug}',function($slug){       
//     return view('posts',[
//         "title" => "Single Post",
//         "post" => post::find($slug)
//     ]);
// });
#Setelah menggunakan controller
Route::get('/post/{post:slug}', [PostController::class, 'show']);
// Route::get('about/{slug}',function($slug){
//     return view('post');
// });




#Route::get('/katalog', function () {
    #Sebelum pakek controller
#    return view('kat',[
#        "title" => "katalog",
#        "posts" => post::all() #bikin function model
#    ]);
#});

##Sebelum menggunakan controller
#Route::get('posts/{slug}',function($slug){       
#    return view('post',[
#        "title" => "Single Post",
#        "post" => post::find($slug)
#    ]);
#});

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'post' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/authors/{user}', function(User $user){
    return view('post', [
        'title' => 'User Post',
        'posts' => $user->post,
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// digunakan untuk menampilkan 
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// digunakan untuk menyimpan 
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/dashboard', function(){
//     return view('dashboard.index');
// })->middleware('auth');

Route::get('/dashboard',[DashboardPost::class,'index'])->middleware('auth');
Route::get('/dashboard/{postl:slug}', [DashboardPost::class, 'show'])->middleware('auth');

// Route::get('/dashboard/service/checkSlug', [DashboardServiceController::class,'checkSlug'])->middleware('auth');
Route::resource('/dashboard/service', DashboardServiceController::class)->middleware('auth');