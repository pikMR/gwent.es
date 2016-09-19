<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
  /*
  $random1 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=1 and idCategory=1 ORDER BY RAND() LIMIT 4"));
  $random2 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=2 and idCategory=1 ORDER BY RAND() LIMIT 4"));
  $random3 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=3 and idCategory=1 ORDER BY RAND() LIMIT 4"));
  $random4 = DB::select(DB::raw("SELECT * FROM Artworks,Cards WHERE Artworks.idCard = Cards.idCard and idRarity=4 and idCategory=1 ORDER BY RAND() LIMIT 4"));

  protected $primarykey = 'idCard';
  protected $table = 'Cards';
  protected $fillable = ['idRarity','idFaction','idType','idAbility','id','name','strength','text','flavor'];
  
  public static function getRandom($rarity,$category)
  {
    $data = Artworks::select('Artworks.filename , Cards.*')
    ->with('card')
    ->where([['Cards.idRarity','=',$rarity],['idCategory','=',$category]])
    ->orderBy('RAND()')->get();
    return $data;
  */
}
