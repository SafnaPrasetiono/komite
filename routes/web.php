<?php

use App\Http\Controllers\admin\bannersAdmin;
use App\Http\Controllers\admin\galeryAdmin;
use App\Http\Controllers\admin\indexAdmin;
use App\Http\Controllers\admin\newsAdmin;
use App\Http\Controllers\auth\authAdmin;
use App\Http\Controllers\pages\galleryController;
use App\Http\Controllers\pages\indexController;
use App\Http\Controllers\pages\newsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/beranda', [indexController::class, 'index'])->name('home');
Route::get('/beranda/berita', [newsController::class, 'index'])->name('news');
Route::get('/beranda/galeri', [galleryController::class, 'index'])->name('gallery');
Route::get('/beranda/berita/{slug}', [newsController::class, 'detail'])->name('news.detail');
Route::get('/beranda/keanggotaan', [indexController::class, 'members'])->name('members');
Route::get('/beranda/tentang-kami', [indexController::class, 'aboutus'])->name('aboutus');


// router for admins
Route::get('/admin/login', [authAdmin::class, 'login'])->name('admin.login');
Route::post('/admin/login/store', [authAdmin::class, 'loginPost'])->name('admin.login.store');
Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [indexAdmin::class, 'index'])->name('admin.index');

    // Routing news
    Route::get('/news', [newsAdmin::class, 'index'])->name('admin.news');
    Route::get('/news/create', [newsAdmin::class, 'create'])->name('admin.news.create');
    Route::post('/news/create/store', [newsAdmin::class, 'store'])->name('admin.news.create.store');
    Route::get('/news/edit/{id}', [newsAdmin::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/update/{id}', [newsAdmin::class, 'update'])->name('admin.news.update');
    Route::get('/news/upload/editore', [newsAdmin::class, 'editor'])->name('admin.news.upload.editor');
    // uploads banner routing
    Route::get('/banners', [bannersAdmin::class, 'index'])->name('admin.banners');
    // galery admin routing
    Route::get('/galeri', [galeryAdmin::class, 'index'])->name('admin.gallery');
    Route::get('/galeri/create', [galeryAdmin::class, 'create'])->name('admin.gallery.create');
    Route::post('/galeri/create/action', [galeryAdmin::class, 'post'])->name('admin.gallery.post');
    Route::get('/galeri/create/images/{id}', [galeryAdmin::class, 'images'])->name('admin.gallery.create.images');
    Route::post('/galeri/create/images/post/{id}', [galeryAdmin::class, 'imagesPost'])->name('admin.gallery.create.images.post');
    Route::get('/galeri/create/finish/{id}', [galeryAdmin::class, 'finish'])->name('admin.gallery.create.finish');
    Route::post('/galeri/create/finish/post/{id}', [galeryAdmin::class, 'publish'])->name('admin.gallery.create.finish.post');
    Route::get('/galeri/update/{id}', [galeryAdmin::class, 'edit'])->name('admin.gallery.update');
    Route::put('/galeri/update/action/{id}', [galeryAdmin::class, 'update'])->name('admin.gallery.update.post');

    Route::get('/logout', [indexAdmin::class, 'logout'])->name('admin.logout');
});