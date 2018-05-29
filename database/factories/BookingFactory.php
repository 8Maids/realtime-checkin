<?php

use Faker\Generator as Faker;

$factory->define(App\Model\booking::class, function (Faker $faker) {
    return [
    	'user_id' => 1,
    	'timesheet_id' => 1,
        'title' => $faker->sentence
    ];
});
