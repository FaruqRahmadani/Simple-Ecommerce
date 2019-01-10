<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['number', 'type', 'price'];

  public function Prepaid(){
    return $this->hasOne('App\Prepaid');
  }
}
