<?php

use Illuminate\Database\Seeder;
use App\Cards;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('cards')->delete();*/
        $json = file_get_contents("database/data/cards.json");
        $data = json_decode($json);

        foreach($data as $obj){ echo $obj;
          /*Cards::create(
            array(
            'idCard' => $obj->id,
            'idRarity' => $obj->idRarity,
            'idFaction' => $obj->idFaction,
            'idType' => $obj->idType,
            'idAbility' => $obj->idAbility,
            'id' => $obj->id,
            'name' => $obj->name,
            'strength' => $obj->strength,
            'text' => $obj->text,
            'flavor' => $obj->flavor
            )
          );*/
        }
    }
}
