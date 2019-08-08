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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/halamanOrda', function () {
    return view('halamanOrda');
});

Route::get('/daftarOrda', function () {
    return view('daftarOrda');
});

Route::get('/halamanDepartemen', function () {
    return view('halamanDepartemen');
});



Auth::routes();



Route::get('/daftarPengurus', 'PengurusController@index')->name('pengurus');
Route::get('/keuangan', 'KeuanganController@index')->name('keuangan');
Route::get('/editProfil', 'ProfilController@index')->name('editProfil');
Route::get('/daftarDepartemen', 'DepartemenController@index')->name('daftarDepartemen');




Route::group(['middleware' => ['web','auth']],function(){



Route::get('/profile', function () {
    return view('profile');
});

Route::get('/home', function(){
	if(Auth::user()->admin == 0 && Auth::user()->role != 2 ){
		return view('home');
	}
	else if(Auth::user()->admin == 1){
		$users['users'] = \App\User::all();
		return view('adminHome',$users);
	}
	else if(Auth::user()->role == 2){
		$users['users'] = \App\User::all();
		return view('inti',$users);
	}
});

Route::get('/keuangan', function(){
if(Auth::user()->role == 2 ){
		$users['users'] = \App\User::all();
		return view('keuangan',$users);
	}
});



});
