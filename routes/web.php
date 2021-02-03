<?php

use App\Articles\ArticlesRepository;
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

Route::get('/', 'HomeController@articles')->name('articles');

Route::get('search', function (ArticlesRepository $repository) {
    $articles = $repository->search(request('q'));

    return view('welcome', [
        'articles' => $articles,
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Showarray', 'HomeController@Showarray');
