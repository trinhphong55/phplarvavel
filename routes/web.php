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


// Route::get('/', function () {
//     return view('themmoilinhvuc');
// })->name('themmoilinhvuc');


// Route::get('/themlinhvuc', function () {
//     return view('danhsachlinhvuc');
// })->name('danhsachlinhvuc');



Route::get('test','quantriviencontroller@laythongtin');
Route::get('login','quantriviencontroller@dangnhap')->name('dangnhap');
Route::post('login','quantriviencontroller@xulidangnhap')->name('xilidangnhap');
Route::get('logout','quantriviencontroller@dangxuat')->name('logout');
Route::get( 'quantrivien/danhsachquantrivien','quantriviencontroller@index')->name('dsquantrivien');



		Route::get('dangxuat', function () {
			return view('dangxuat');
		})->name('dangxuat');

Route::middleware('auth')->group(function(){

Route::get('/', function () {
    return view('layout');
})->name('trangchu');



	Route::prefix('linhvuc')->group(function(){
	Route::name('linhvuc')->group(function(){

		Route::get('/linhvuc', function () {
			return view('linhvuc/danhsachlinhvuc@index');
		})->name('danhsach');

		Route::get('/themmoi','linhvuccontroller@create', function () {
			return view('linhvuc/themmoilinhvuc');
		})->name('themmoi');

		Route::get('/sualinhvuc', function () {
			return view('linhvuc/sualinhvuc');
		})->name('sualv');

		Route::get('/thungraclinhvuc', function () {
			return view('linhvuc/thungraclinhvuc');
		})->name('thungraclv');

	   Route::get( '/thungraclinhvuc','linhvuccontroller@thungrac')->name('thungraclv');
		Route::Post('/themmoi','linhvuccontroller@store')->name('themmoi');
		 // Route::get('/','linhvuccontroller@index')->name('danhsach');
		Route::get( '/linhvuc','linhvuccontroller@index')->name('danhsach');
		Route::get('linhvuc/{id}/edit', 'linhvuccontroller@edit')->name('sua'); // Sửa học sinh
        Route::PATCH('linhvuc/{id}/update', 'linhvuccontroller@update')->name('xulisua'); // Xử lý sửa học sinh
	     Route::DELETE('/linhvuc/delete/{id}', 'linhvuccontroller@destroy')->name('xoa');//xoa
	      Route::DELETE('/linhvuc/delete2/{id}', 'linhvuccontroller@xoavinhvien')->name('xoathunggiac');//xoa
	      Route::DELETE('/linhvuc/back/{id}', 'linhvuccontroller@khoiphuc')->name('khoiphuc');

	});
});
});


Route::prefix('cauhoi')->group(function(){
	Route::name('cauhoi')->group(function(){

	Route::get('/cauhoi', function () {
			return view('cauhoi/danhsachcauhoi@index');
		})->name('danhsachcauhoi');

		Route::get('/themmoi','linhvuccontroller@idcauhoi', function () {
			return view('cauhoi/themcauhoi');
		})->name('themmoicauhoi');

	 Route::get('/suacauhoi', function () {
			return view('cauhoi/suacauhoii');
		})->name('suanc');


	Route::get('/thungraccauhoi', function () {
			return view('cauhoi/thungraccauhoi');
		})->name('thungracch');

	   Route::get( '/thungraccauhoi','cauhoicontroller@thungrac')->name('thungracch');

		Route::Post('/danhsach','cauhoicontroller@store')->name('themcauhoi');
		 // Route::get('/','linhvuccontroller@index')->name('danhsach');
		Route::get( '/cauhoi','cauhoicontroller@index')->name('danhsachcauhoi');
		Route::get('cauhoi/{id}/edit', 'cauhoicontroller@edit')->name('suacauhoi');
        Route::PATCH('cauhoi/{id}/update', 'cauhoicontroller@update')->name('xulisuacauhoi'); // Xử lý sửa học sin
		 Route::DELETE('/cauhoi/delete/{id}', 'cauhoicontroller@destroy')->name('xoacauhoi');//xoa

		 Route::DELETE('/cauhoi/delete2/{id}', 'cauhoicontroller@xoavinhvien')->name('xoathunggiac');//xoa
	      Route::DELETE('/cauhoi/back/{id}', 'cauhoicontroller@khoiphuc')->name('khoiphuc');

	      
	});
});







Route::prefix('nguoichoi')->group(function(){
	Route::name('nguoichoi')->group(function(){

	Route::get('/nguoichoi', function () {
			return view('nguoichoi/danhsachnguoichoi@index');
		})->name('danhsachnguoichoi');

		Route::get('/themnguoichoi','nguoichoicontroller@create', function () {
			return view('nguoichoi/themnguoichoi');
		})->name('themnc');

		 Route::get('/suanguoichoi', function () {
			return view('nguoichoi/suanguoichoi');
		})->name('suanc');

		 Route::get('/nguoichoikhoa', function () {
			return view('nguoichoi/taikhoankhoanguoichoi');
		})->name('nguoichoikhoa');

Route::get( '/nguoichoi','nguoichoicontroller@index')->name('danhsachnguoichoi');
Route::Post('/nguoichoi','nguoichoicontroller@store')->name('themnguoichoi');
Route::get('nguoichoi/{id}/edit', 'nguoichoicontroller@edit')->name('suanguoichoi');
 Route::PATCH('nguoichoi/{id}/update', 'nguoichoicontroller@update')->name('xulisuanguoichoi');
 Route::DELETE('/nguoichoi/delete/{id}', 'nguoichoicontroller@destroy')->name('xoanguoichoi');//
  Route::get( '/nguoichoikhoa','nguoichoicontroller@nckhoa')->name('nguoichoikhoa');
  Route::DELETE('/nguoichoi/back/{id}', 'nguoichoicontroller@mokhoa')->name('mokhoanguoichoi');//

	});
});



Route::prefix('luotchoi')->group(function(){
	Route::name('luotchoi')->group(function(){

		Route::get('/luotchoi', function () {
			return view('chitietluotchoi/luotchoi');
		})->name('danhsachluot');
	});
});


Route::prefix('cauhinhapp')->group(function(){
	Route::name('cauhinhapp')->group(function(){

		Route::get('/cauhinhapp', function () {
			return view('cauhinhapp/cauhinhapp');
		})->name('cauhinhapp');
		Route::get( '/cauhinhapp','cauhinhappcontroller@index')->name('cauhinhapp');
	});
});


Route::prefix('cauhinhdiem')->group(function(){
	Route::name('cauhinhdiem')->group(function(){

		Route::get('/cauhinhdiem', function () {
			return view('cauhinhdiemcauhoi/cauhinhdiem');
		})->name('cauhinhdiem');
		Route::get( '/cauhinhdiem','cauhinhcauhoicontroller@index')->name('cauhinhdiem');
	});
});

Route::prefix('cauhinhtrogiup')->group(function(){
	Route::name('cauhinhtrogiup')->group(function(){

		Route::get('/cauhinhtrogiup', function () {
			return view('cauhinhtrogiup/cauhinhtrogiup');
		})->name('cauhinhtrogiup');
		Route::get( '/cauhinhtrogiup','cauhinhtrogiupcontroller@index')->name('cauhinhtrogiup');
	});
});



Route::prefix('credit')->group(function(){
	Route::name('credit')->group(function(){

		Route::get('/credit', function () {
			return view('goicredit/credit');
		})->name('credit');
		Route::get( '/credit','creditcontroller@index')->name('credit');

		Route::get('/themcredit', function () {
			return view('goicredit/themcredit');
		})->name('themcreditt');

		 Route::get('/suacredit', function () {
			return view('goicredit/suacredit');
		})->name('suacredit');

Route::get( '/credit','creditcontroller@index')->name('credit');
 Route::Post('/credit','creditcontroller@store')->name('themcredit');
Route::get('credit/{id}/edit', 'creditcontroller@edit')->name('suacredit');
 Route::PATCH('credit/{id}/update', 'creditcontroller@update')->name('updatecredit');
  Route::DELETE('/credit/delete/{id}', 'creditcontroller@destroy')->name('xoacredit');
	});
});

Route::prefix('lscredit')->group(function(){
	Route::name('lscredit')->group(function(){

		Route::get('/credit', function () {
			return view('lsmuacredit/lsmuacredit');
		})->name('lscredit');
		Route::get( '/credit','lichsumuacreditcontroller@index')->name('lscredit');
	});
});


Route::prefix('luotchoi')->group(function(){
	Route::name('luotchoi')->group(function(){

		Route::get('/luotchoi', function () {
			return view('luotchoi/luotchoi');
		})->name('luotchoi');
		Route::get('/luotchoi','luotchoicontroller@index')->name('luotchoi');
	});
});

Route::prefix('ctluotchoi')->group(function(){
	Route::name('ctluotchoi')->group(function(){

		Route::get('/ctluotchoi', function () {
			return view('chitietluotchoi/ctluotchoi');
		})->name('ctluotchoi');
		Route::get('/ctluotchoi','chitietluotchoicontroller@index')->name('ctluotchoi');
	});
});



		