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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'MessagesController@index');

Route::resource('messages', 'MessagesController');

/* CRUD　　「Route::resource('messages', 'MessagesController');」が下記7点を示している
Route::get('messages/{id}', 'MessagesController@show')->name('messages.show');・・・メッセージの個別詳細ページ表示
Route::post('messages', 'MessagesController@store')->name('messages.store');・・・メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
Route::put('messages/{id}', 'MessagesController@update')->name('messages.update');・・・メッセージの更新処理（編集画面を表示するためのものではありません）
Route::delete('messages/{id}', 'MessagesController@destroy')->name('messages.destroy');・・・メッセージを削除
Route::get('messages', 'MessagesController@index')->name('messages.index');・・・showの補助ページ
Route::get('messages/create', 'MessagesController@create')->name('messages.create');・・・新規作成用のフォームページ
Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');・・・ 更新用のフォームページ
 */