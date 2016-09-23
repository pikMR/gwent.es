<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\Cards;
use App\Artworks;

class CardsController extends Controller
{
    private $array_random; /* necesito esta variable si quiero que esté presente al realizar busquedas futuras */

    public function __construct(){

    }

    /*
      cada vez que carga calcula 4 cartas aleatorias según la rareza de la carta : común épico legendario raro
    */
    public function index(Request $request){
      $this->calcularRandom($request);
      $array_random = $this->array_random; // array_random podría llamarse de cualquier forma, solo lo hago para no poner mas nombres.
      return view('layouts.example',compact('array_random'));
    }

    public function calcularRandom(Request $request){
      /*Cards::getRandom(1,1);*/
      $random1 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=1 and idCategory=1 ORDER BY RAND() LIMIT 4"));
      $random2 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=2 and idCategory=1 ORDER BY RAND() LIMIT 4"));
      $random3 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=3 and idCategory=1 ORDER BY RAND() LIMIT 4"));
      $random4 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=4 and idCategory=1 ORDER BY RAND() LIMIT 4"));
      $this->array_random = [$random1,$random2,$random3,$random4];

      $request->session()->put($this->array_random);
    }

    /*
      Todas las cartas
    */
    public function todo(){
      $data = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idCategory=1"));
      return view('artworks.list_data',compact(['data']));
    }
    /*
      Filtra por menor de resistencia a 4
    */
    public function menor(){
      $data = DB::select(DB::raw("SELECT * FROM Cards,Artworks WHERE Artworks.idCard = Cards.idCard and `strength` < 4 ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data']));
    }
    /*
      Filtra por mayor de resistencia a 8
    */
    public function mayor(){
      $data = DB::select(DB::raw("SELECT * FROM Cards,Artworks WHERE Artworks.idCard = Cards.idCard and `strength` > 8 ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data']));
    }

    public function entre(){
      $data = DB::select(DB::raw("SELECT * FROM Cards,Artworks WHERE Artworks.idCard = Cards.idCard and `strength` BETWEEN 4 AND 8 ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data']));
    }
    /*
      Filtra por tipo : escpecial,lider,tropa,personaje,heroe,leal,desleal
    */
    public function type($id){
      if(!is_numeric($id)){
        return redirect()->away('https://www.exo.do');
      }
      $tipo = $id;
      $data = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and `idType` = $id ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data','tipo']));
    }
    /*
      filtra por cuerpo a cuerpo,arqueros o catapultas
    */
    public function row($id){
      if(!is_numeric($id)){
        return redirect()->away('https://www.exo.do');
      }
    $fila = $id;
    $data = DB::select(DB::raw("SELECT * FROM Artworks,Cards,CardsRows WHERE CardsRows.idCard = Cards.idCard and Artworks.idCard = Cards.idCard and CardsRows.idRow = $id ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data','fila']));
    }

    /*
    Especialización de carta
    */
    public function verCarta($id){
      if(!is_numeric($id)){
        return redirect()->away('https://www.exo.do');
      }

    $data = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and Cards.idCard = $id ORDER BY `strength` ASC"));

      if(empty($data))
          return redirect()->away('home');

    $filas = DB::select(DB::raw("SELECT CardsRows.idRow FROM Cards,CardsRows WHERE CardsRows.idCard = Cards.idCard and Cards.idCard = $id ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data','id','filas']));
    }

    /*  Busqueda en boton busqueda    */
    public function verNombre($nombre){
      if( (strlen($nombre)>20) || (mb_stristr($nombre,"from")) ){
        return redirect()->away('https://www.exo.do');
      }

    $data = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and Cards.name = $name ORDER BY `strength` ASC"));

      if(empty($data))
          return redirect()->away('home');

    $filas = DB::select(DB::raw("SELECT CardsRows.idRow FROM Cards,CardsRows WHERE CardsRows.idCard = Cards.idCard and Cards.name = $name ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data','id','filas']));
    }


    /*SELECT * FROM Artworks,Cards,CardsRows WHERE CardsRows.idCard = Cards.idCard and Artworks.idCard = Cards.idCard and CardsRows.idRow = 1 ORDER BY `strength` ASC
      1 : name/id : melee
      2 : name/id : ranged
      3 : name/id : siege
    */


}
