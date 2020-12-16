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

//Bang user
Route::get('/users', "MemberController@index") ->name('users.index');
Route::post('/users', "MemberController@store") ->name('users.store');
Route::get('/users/create', "MemberController@create") ->name('users.create');
Route::get('/users/{id}/edit', "MemberController@edit") ->name('users.edit');
Route::get('/users/{id}', "MemberController@show") ->name('users.show');
Route::patch('/users/{id}', "MemberController@udpate") ->name('users.update');
//bang inbox
Route::get('/inbox', "ChatController@index") ->name('inbox.index');
Route::post('/inbox', "ChatController@sInboxre") ->name('inbox.store');
Route::get('/inbox/create', "ChatController@create") ->name('inbox.create');
Route::get('/inbox/{id}/edit', "ChatController@edit") ->name('inbox.edit');
Route::get('/inbox/{id}', "ChatController@show") ->name('inbox.show');
Route::patch('/inbox/{id}', "ChatController@udpate") ->name('inbox.update');
//bang group
Route::get('/group', "GroupController@index") ->name('group.index');
Route::post('/group', "GroupController@sgroupre") ->name('group.store');
Route::get('/group/create', "GroupController@create") ->name('group.create');
Route::get('/group/{id}/edit', "GroupController@edit") ->name('group.edit');
Route::get('/group/{id}', "GroupController@show") ->name('group.show');
Route::patch('/group/{id}', "GroupController@udpate") ->name('group.update');
//bang groupinbox
Route::get('/inboxgroup', "ChatGroupController@index") ->name('inboxgroup.index');
Route::post('/inboxgroup', "ChatGroupController@sInboxgroupre") ->name('inboxgroup.store');
Route::get('/inboxgroup/create', "ChatGroupController@create") ->name('inboxgroup.create');
Route::get('/inboxgroup/{id}/edit', "ChatGroupController@edit") ->name('inboxgroup.edit');
Route::get('/inboxgroup/{id}', "ChatGroupController@show") ->name('inboxgroup.show');
Route::patch('/inboxgroup/{id}', "ChatGroupController@udpate") ->name('inboxgroup.update');

