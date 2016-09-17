<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\Cards;
use App\Artworks;

class CardsController extends Controller
{
    private $array_random;

    public function __construct(){

    }

    public function index(Request $request){

        $random1 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=1 and idCategory=1 ORDER BY RAND() LIMIT 4"));
        $random2 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=2 and idCategory=1 ORDER BY RAND() LIMIT 4"));
        $random3 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=3 and idCategory=1 ORDER BY RAND() LIMIT 4"));
        $random4 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=4 and idCategory=1 ORDER BY RAND() LIMIT 4"));
        $this->array_random = [$random1,$random2,$random3,$random4];

      $array_random = $this->array_random; // array_random podría llamarse de cualquier forma, solo lo hago para no poner mas nombres.
      $request->session()->put($array_random);
      return view('layouts.example',compact('array_random'));
    }

    public function todo(){
      $data = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idCategory=1"));
      return view('artworks.list_data',compact(['data']));
    }

    public function menor(){
      $data = DB::select(DB::raw("SELECT * FROM Cards,Artworks WHERE Artworks.idCard = Cards.idCard and `strength` < 4 ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data']));
    }

    public function mayor(){
      $data = DB::select(DB::raw("SELECT * FROM Cards,Artworks WHERE Artworks.idCard = Cards.idCard and `strength` > 8 ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data']));
    }

    public function entre(){
      $data = DB::select(DB::raw("SELECT * FROM Cards,Artworks WHERE Artworks.idCard = Cards.idCard and `strength` BETWEEN 4 AND 8 ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data']));
    }

    public function type($id){
      $data = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and `idType` = $id ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data']));
    }

    public function row($id){
    $data = DB::select(DB::raw("SELECT * FROM Artworks,Cards,Cardsrows WHERE Cardsrows.idCard = Cards.idCard and Artworks.idCard = Cards.idCard and Cardsrows.idRow = $id ORDER BY `strength` ASC"));
      return view('artworks.list_data',compact(['data']));
    }

    /*SELECT * FROM Artworks,Cards,Cardsrows WHERE Cardsrows.idCard = Cards.idCard and Artworks.idCard = Cards.idCard and Cardsrows.idRow = 1 ORDER BY `strength` ASC
      1 : name/id : melee
      2 : name/id : ranged
      3 : name/id : siege
    */
    public function hilera($row){

    }


}
