<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Pindah ke dalam route::group
//Route::get('/', function () {
//    return View('home');
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Ternyata perbedaan Laravel 5.1 dengan Laravel 5.2 adalah, di Laravel 5.2 semua Views/Controller yg ingin menggunakan
//Session, CSRF Token, Authentication, dsb. harus menggunakan Middleware => 'web' agar bisa dijalankan
//JADI, kalo ada view/controller yg butuh Session, CSRF Token, whatever, masukkan ke dalam route::group di bawah ya~

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'Crudcontroller@home'); //Fungsinya kumasukkan ke controller agar rapi dan enak dilihat
    Route::post('prosestambah','Crudcontroller@tambahdata');
    Route::get('read','Crudcontroller@lihatdata');
    Route::get('hapus/{id}', 'Crudcontroller@hapusdata');
});
 

 ?>
