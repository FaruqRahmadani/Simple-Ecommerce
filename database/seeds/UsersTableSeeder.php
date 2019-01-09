<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $faker = Faker\Factory::create('id_ID');
    User::create([
      'name' => $faker->name,
      'password' => 'admin',
      'email' => 'admin@admin.com',
    ]);
  }
}
