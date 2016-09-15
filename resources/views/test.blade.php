<?php
include "../resources/views/includes/data.php";
$func = new Data();

$json = file_get_contents("../database/data/cards.json");
$data = json_decode($json);
foreach ($data as $key => $val) {
  /*  if(is_array($val)) {
        echo "arr:\n";
        echo "$key:\n";
    } else {

        echo "obj:\n";
        echo "$key => $val\n";
    }*/
    if($key=='results'){
      foreach ($val as $keypj => $valpj) {
          if($keypj='href'){
            print_r($val);
            echo "<br>";
            $jsonpj = file_get_contents("$valpj->href");
            $datapj = json_decode($jsonpj);
          /*  dd($datapj);*/
            echo "nombre -> ". $datapj->name ." id -> " . $datapj->id;
            echo "idFaction -> ". $datapj->name ." id -> " . $datapj->id;
            echo "<br>";
          }
      }
  }
}


/*  for ($i=0; $i < $data['0']; $i++) {

}*/

  /*  foreach ($v2['0'] as $k3 => $v3) {

  }*/

 ?>
