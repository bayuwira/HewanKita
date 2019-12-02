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
Route::get('/', function () {
    return view('landing.home.index');
})->name('landing.home.index');


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
