<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
Route::get('articles','ArticleController@index');

Route::get('articles/{id}',function($id){
    return Article::find($id);
});

Route::post('articles',function(Request $request,$id){
    $article=Article::findOrFail($id);
    $article->update($request->all());
    return $article;
});
Route::put('article/{id}',function  (Request $request,$id){
    $article=Article::findOrFail($id);
    $article->update($request->all());
    return $article;
});
Route::delete('articals/{id}',function($id){
    Article::find($id)->delete();
    return 204;
});
