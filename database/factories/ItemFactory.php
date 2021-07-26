<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $this->faker->firstname,
        'user_id' => 1,
        'type' => $this->faker->numberBetween(1,16),
        'payload' => $this->faker->paragraph(4),
        'assets' => '',
        'draft'
    ];
});


