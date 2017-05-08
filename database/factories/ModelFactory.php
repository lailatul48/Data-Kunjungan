<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Domain\Entities\Users::class, function (Faker\Generator $faker) {

return [
    'nis' => $faker->numberBetween($min=1000,$max=9000),
    'name' => $faker->name,
    'email' => $faker->unique()->safeEmail,
    'password' =>bcrypt('qwerty'),
    'level' => $faker->numberBetween(0,1),
    'status' => $faker->randomElement($array = array ('Siswa','Guru'))
      ];
});
