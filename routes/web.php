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

Route::get('/','landing\HomeController@index')->name('landing.home');
Route::get('/iklan','landing\AdvertiseController@index')->name('landing.advertise');
Route::get('/iklan_detail', 'landing\AdvertiseController@show')->name('landing.advertise.detail');
Route::get('/iklan_tambah', 'landing\UsersController@create')->name('landing.users.create');
Route::get('/iklan_dashboard_{id}', 'landing\UsersController@dashboard')->name('landing.users.dashboard');
Route::get('/keranjang', 'landing\CartController@index')->name('landing.cart');
Route::get('/produk', 'landing\ProductController@index')->name('landing.product');
Route::get('/produk_detail', 'landing\ProductController@show')->name('landing.product.detail');
Route::get('/forum', 'landing\ForumController@index')->name('landing.forum');
Route::get('/forum_detail', 'landing\ForumController@show')->name('landing.forum.detail');



Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['checkroleuserlogin:1']], function () {
        $urlAdmin = '/control-panel';

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

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);

// Route::get('/siap', function () {
//     return human_file_size(1024*1024);
// });