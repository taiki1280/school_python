<?php

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
  return [
    'name' => $faker->name, //ランダムで名前を生成
    'mail' => $faker->unique()->safeEmail, //ランダムでユニークな使われていないメールを生成
    'age' => $faker->numberBetween($min = 1, $max = 100), //ランダムで1~100の値を生成
  ];
});
