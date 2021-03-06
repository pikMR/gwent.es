<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Factions;

use Illuminate\Support\Facades\DB;



class FactionsController extends Controller
{
        public function index()
        {
        /*  Categories::fotos();*/
          $data = Factions::all();
        /*  include "../resources/views/includes/data.php";
          $datos = new Data();
          $datos = $datos->random_querys();*/

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

          //Categories::fotos();
          //dd($facciones);
        }

        public function show_foto($n_faccion,$n_categoria){

          //($n_faccion,$n_categoria);
          if(!is_numeric($n_categoria)||!is_numeric($n_faccion)){
            return redirect()->away('https://www.exo.do');
          }
          $data = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idFaction=$n_faccion and idCategory=$n_categoria"));
          return view('artworks/list_data',compact(['data','n_faccion']));
        }
}
