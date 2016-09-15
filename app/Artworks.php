<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Artworks extends Model
{
      public function card(){
        return $this->belongsTo('Cards','idCard');
      }
}
