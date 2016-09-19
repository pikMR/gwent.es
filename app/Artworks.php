<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Artworks extends Model
{
      public function card(){
        return $this->belongsTo('Cards','idCard');
      }
      /*  public function card(){
          return $this->hasOne('App\Cards');
        }*/
}
