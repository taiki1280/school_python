<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    // $this->call(RestdataTableSeeder::class);
    $this->call(PeopleTableSeeder::class); //無かった場合は追記すること。
    // $this->call(SubjectTableSeeder::class);
  }
}
