<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Cards;
use App\Artworks;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

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

}
