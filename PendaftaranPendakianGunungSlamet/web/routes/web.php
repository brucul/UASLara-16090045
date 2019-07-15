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

Route::get('/', 'LandingController@Home');

Route::get('/daftar-1', function () {
    return view('pages.user.form_daftar_1');
});

Route::get('/form-1', 'DaftarController@listKuota');
Route::post('/form/post', 'DaftarController@inputJadwal')->name('daftar');

Route::post('/form-finish', 'DaftarController@finish')->name('proses-daftar');
Route::get('/form-finish', 'DaftarController@finishDaftar')->name('finish-daftar');

Route::post('/kode', 'PendakiController@show')->name('search-kode');

//Route::resource('pendaki', 'PendakiController');
//Route::get('pendaki/destroy/{id}', 'PendakiController@destroy');

Route::resource('daftar', 'DaftarController');
Route::get('/form-2', 'DaftarController@anggota');
Route::post('/daftar-step2', 'DaftarController@postCreateStep2');

//Route::get('/formd', 'LandingController@show');

Route::get('/post/{id}', 'LandingController@showPost');

//Route::post('formd/store', 'LandingController@inputJadwal')->name('jadwal.pendakian.store');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin/dashboard', 'HomeController@index')->name('home')->middleware('auth');
Route::prefix('admin')->group(function () {
	Route::get('dashboard', 'HomeController@index')->name('home');
    //jadwal
    Route::get('jadwal', 'HomeController@jadwal')->name('jadwal');
	//kuota
	Route::resource('kuota', 'KuotaController');
    Route::post('kuota/update', 'KuotaController@update')->name('kuota.update');
    Route::get('kuota/destroy/{id}', 'KuotaController@destroy');
    //aturan
    Route::resource('aturan', 'AturanController');
    Route::post('update', 'AturanController@update')->name('aturan.update');
    Route::get('aturan/destroy/{id}', 'AturanController@destroy');
    //galeri
    Route::resource('galeri', 'GaleriController');
    Route::post('galeri/update', 'GaleriController@update')->name('galeri.update');
    Route::get('galeri/destroy/{id}', 'GaleriController@destroy');
    //blog
    Route::resource('add-post', 'BlogController');
    Route::get('post', 'BlogController@list')->name('post-list');
    Route::post('post/update', 'BlogController@update')->name('post.update');
    Route::get('post/destroy/{id}', 'BlogController@destroy');
    //sejarah
    Route::get('sejarah', 'SejarahController@edit')->name('sejarah');
    Route::post('sejarah/update', 'SejarahController@update')->name('sejarah.update');

});
    Route::get('/web/post/edit/{id}', 'BlogController@edit');
