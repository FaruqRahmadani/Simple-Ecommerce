<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamePriceToPrepaidsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('prepaids', function (Blueprint $table) {
      $table->renameColumn('price', 'value');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('prepaids', function (Blueprint $table) {
      $table->renameColumn('value', 'price');
    });
  }
}
