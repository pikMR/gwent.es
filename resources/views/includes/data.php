<?php
use Illuminate\Support\Facades\DB;

  class Data{

    function getImgTxt($link){
    }

    function getImg($href){
      // aw -- art work
      $aw_url = $href . '/artworks';
      $aw_json = file_get_contents($aw_url);
      $aw_array = json_decode($aw_json,true);
      return $aw_array['artwork']['normal_size'];
    }

    function pre($data){
      echo "<pre>";
      print_r($data);
      echo "</pre>";
    }

    public function random_querys(){
      $random1 = DB::select(DB::raw("SELECT * FROM artworks,cards WHERE artworks.idCard = cards.idCard and idRarity=1 and idCategory=1 ORDER BY RAND() LIMIT 4"));
      $random2 = DB::select(DB::raw("SELECT * FROM artworks,cards WHERE artworks.idCard = cards.idCard and idRarity=2 and idCategory=1 ORDER BY RAND() LIMIT 4"));
      $random3 = DB::select(DB::raw("SELECT * FROM artworks,cards WHERE artworks.idCard = cards.idCard and idRarity=3 and idCategory=1 ORDER BY RAND() LIMIT 4"));
      $random4 = DB::select(DB::raw("SELECT * FROM artworks,cards WHERE artworks.idCard = cards.idCard and idRarity=4 and idCategory=1 ORDER BY RAND() LIMIT 4"));
      return compact($random1,$random2,$random3,$random4);
    }
  }
 ?>
