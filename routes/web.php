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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// landing controller
Route::get('/','landing\HomeController@index')->name('landing.home');
Route::get('/iklan','landing\AdvertiseController@index')->name('landing.advertise');
Route::get('/iklan_detail_{id}', 'landing\AdvertiseController@show')->name('landing.advertise.detail');
Route::get('/iklan_tambah', 'landing\UsersController@create')->name('landing.users.create');
Route::get('/iklan_dashboard_{id}', 'landing\UsersController@dashboard')->name('landing.users.dashboard');
Route::get('/forum_tambah', 'landing\UsersController@create_forum')->name('landing.users.create_forum');
Route::get('/forum_dashboard_{id}', 'landing\UsersController@dashboard_forum')->name('landing.users.dashboard_forum');
Route::get('/profile_{id}', 'landing\UsersController@profile')->name('landing.users.profile');
Route::get('/keranjang', 'landing\CartController@index')->name('landing.cart');
Route::get('/produk', 'landing\ProductController@index')->name('landing.product');
Route::get('/produk/detail/{id}', 'landing\ProductController@show')->name('landing.product.detail');
Route::patch('/profile/update{id}', 'Landing\UsersController@update')->name('landing.users.update');

// forum 
Route::get('/forum', 'Landing\ForumController@index')->name('landing.forum');
Route::get('/forum/create', 'Landing\ForumController@create')->name('landing.forum.create')->middleware('auth');
Route::post('/forum/store', 'Landing\ForumController@store')->name('landing.forum.store')->middleware('auth');
Route::get('/forum/{id}/show', 'Landing\ForumController@show')->name('landing.forum.show');
Route::post('/forum/{id}', 'Landing\ForumController@store_comment')->name('landing.forum.comment.store');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['checkroleuserlogin:1']], function () {
        $urlAdmin = '/control-panel';
        //produk jual
        Route::get($urlAdmin.'/produk/data', 'Admin\ProdukController@data')->name('adminpanel.produk.data');
        Route::get($urlAdmin, 'Admin\DashboardController@index')->name('adminpanel.dashboard.index');
        Route::resource($urlAdmin . '/produk', 'Admin\ProdukController')->names([
            'index' => 'adminpanel.produk.index',
            'create' => 'adminpanel.produk.create',
            'store' => 'adminpanel.produk.store',
            'edit' => 'adminpanel.produk.edit',
            'update' => 'adminpanel.produk.update',
            'destroy' => 'adminpanel.produk.destroy'
        ])->except([
            'show'
        ]);
        //user
        Route::get($urlAdmin.'/pengguna/data', 'Admin\PenggunaController@data')->name('adminpanel.pengguna.data');
        Route::resource($urlAdmin . '/pengguna', 'Admin\PenggunaController')->names([
            'index' => 'adminpanel.pengguna.index',
            'create' => 'adminpanel.pengguna.create',
            'store' => 'adminpanel.pengguna.store',
            'edit' => 'adminpanel.pengguna.edit',
            'update' => 'adminpanel.pengguna.update',
            'destroy' => 'adminpanel.pengguna.destroy'
        ])->except([
            'show'
        ]);

        Route::get($urlAdmin.'/kategori/produk/data', 'Admin\ProdukKategoriController@data')->name('adminpanel.kategori.produk.data');
        Route::resource($urlAdmin . '/kategori/produk', 'Admin\ProdukKategoriController')->names([
            'index' => 'adminpanel.kategori.produk.index',
            'create' => 'adminpanel.kategori.produk.create',
            'store' => 'adminpanel.kategori.produk.store',
            'edit' => 'adminpanel.kategori.produk.edit',
            'update' => 'adminpanel.kategori.produk.update',
            'destroy' => 'adminpanel.kategori.produk.destroy'
        ])->except([
            'show'
        ]);
    });
});

Auth::routes();

Auth::routes(['verify' => true]);

// Route::get('/siap', function () {
//     return human_file_size(1024*1024);
// });s