<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','CardsController@index');

Route::get('home','CardsController@index');

Route::get('example',function(){
  return view('layouts.example');
});

/*  CATEGORIAS  */
Route::get('categorias','CategoriesController@index');

Route::post('categorias','CategoriesController@store');

Route::get('categorias/{categoria}','CategoriesController@show')->where('categoria','[1-3]');

Route::get('categorias/{categoria}/fotos','CategoriesController@show_foto')->where('categoria','[1-3]');

/* FACCIONES */

Route::get('facciones','FactionsController@index');

Route::post('facciones','FactionsController@store');

Route::get('facciones/{faccion}','FactionsController@show')->where('faccion','[1-5]');

/* FACCIONES & CATEGORIA */

Route::get('facciones/{faccion}/fotos/{categoria}','FactionsController@show_foto')->where(['categoria','[1-3]'],['faccion','[1-5]']);

Route::get('query/all','CardsController@todo');
Route::get('query/less','CardsController@menor');
Route::get('query/beetwen','CardsController@entre');
Route::get('query/higher','CardsController@mayor');
Route::get('query/type/{id}','CardsController@type')->where('id','[1-7]');
Route::get('query/row/{id}','CardsController@row')->where('id','[1-3]');



/*'faccion','[1-5]')->and('categoria','[1-3]');
Route::post('query/all/{array_random}',['as'=>'query/all','uses'=>'CardsController@todo']);
*/
