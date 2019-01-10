<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prepaid extends Model
{
  protected $fillable = ['phone_number', 'value', 'order_id'];
}
