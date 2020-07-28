<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Person;

class PeopleTableSeeder extends Seeder
{
  public function run()
  {
    factory(Person::class, 50)->create(); //今回は50個のテストデータを作成
  }
}
