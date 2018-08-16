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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username'=>$faker->username,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'avatar'=>$faker->imageUrl(300,300,'people'),
    ];
});


$factory->define(App\Message::class, function(Faker\Generator $faker){
	return [
		'content' => $faker->realText(random_int(20,160)),
<<<<<<< HEAD
		'image'=> 'https://picsum.photos/600/338?image='.rand(0,1000),
        'created_at'=>$faker->dateTimeThisDecade,
        'updated_at'=>$faker->dateTimeThisDecade
=======
		'image'=> $faker->imageUrl(600,338)
>>>>>>> 09dc42edc533234ff5427dcf35d566e0a5488e78
	];
});