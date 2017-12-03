<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\UserProfile::class, function(\Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'gender' => $faker->randomLetter,
        'mail' => $faker->email,
        'phone' => $faker->phoneNumber,
        'zoo' => '',
        'birthday' => $faker->date('Y-m-d'),
        'is_visible' => 1,
        'photo' => '',
        'buque' => $faker->word,
        'fams' => $faker->numberBetween(1,188),
        'mail_gadz' => $faker->companyEmail,
        'bande' => $faker->word,
        'boquette' => $faker->sentence(3),
        'bouls' => $faker->sentence(6),
        'created_at' => $faker->date('Y-m-d'),
        'updated_at' => $faker->date('Y-m-d'),
        'user_id' => function() {
        	return factory(App\User::class)->create()->id;
        },
        'localisation' => '',
        'job' => '',
        'solde' => $faker->randomFloat(2, -100, 100),
        'is_admin' => $faker->boolean,
    ];
});

$factory->define(App\News::class, function (Faker $faker) {

    return [
        'title' => $faker->title,
        'content' => $faker->text(100),
        'user_profile_id' => function() {
        	return factory(App\UserProfile::class)->create()->id;
        },

        'created_at' => $faker->date('Y-m-d'),
        'updated_at' => $faker->date('Y-m-d'),
    ];
});
