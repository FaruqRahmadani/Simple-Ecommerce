<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdAndStatusToOrdersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('orders', function (Blueprint $table) {
      $table->integer('user_id')->after('price');
      $table->tinyInteger('status')->default(0)->after('price');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('orders', function (Blueprint $table) {
      $table->dropColumn('user_id');
      $table->dropColumn('status');
    });
  }
}
