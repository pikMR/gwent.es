<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Artworks;
use App\Cards;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index()
    {
    /*  Categories::fotos();*/
      $data = Categories::all();
      return view('artworks/list_data',compact('data'));
    }


    public function store(){
        return 'Creando foto';
    }

    public function show($n_categoria){
      $categoria = Categories::find($n_categoria);
      //Categories::fotos();
      dd($categoria->name);
    }

    public function show_foto($n_categoria){
      $matchThese = ['idCategory' => $n_categoria];
      $data = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idCategory=$n_categoria"));
      return view('artworks/list_data',compact('data'));
    }
}
