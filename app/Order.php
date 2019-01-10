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

  public function isCanceled(){
    if (($this->status == 0) && (now () > $this->created_at->addMinutes(5))) return true;
    return false;
  }
}
