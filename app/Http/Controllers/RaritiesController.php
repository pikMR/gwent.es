<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RaritiesController extends Controller
{
       public function index()
        {
          $data = Factions::all();
          return view('artworks/list_data',compact('data'));
        }


        public function store(){
            return 'Creando foto';
        }

        public function show($n_faccion){
          if(!is_numeric($n_faccion)){
            return redirect()->away('https://www.exo.do');
          }

          $facciones = Factions::find($n_faccion);
          dd($facciones->name);
          //Categories::fotos();
          //dd($facciones);
        }



        public function show_foto($idRarity,$n_categoria){
          if(!is_numeric($n_categoria)||!is_numeric($idRarity)){
            return redirect()->away('https://www.exo.do');
          }
          
          $data = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=$idRarity and idCategory=$n_categoria"));
          return view('artworks/list_data',compact('data'));
        }
}
