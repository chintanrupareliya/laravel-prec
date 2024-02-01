<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
Route::get('articles','ArticleController@index');

Route::get('articles/{article}','ArticleController@show');

Route::post('articles','ArticleController@store');

Route::put('article/{article}','ArticleController@update');

Route::delete('articals/{article}','ArticleController@delete');
