<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['number', 'type', 'price', 'user_id', 'status'];

  public function Prepaid(){
    return $this->hasOne('App\Prepaid');
  }

  public function Product(){
    return $this->hasOne('App\Product');
  }
}
