<?php

use App\Modules\Event;
use App\User;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    /** @var \Carbon\Carbon $started_at */
    $started_at = \Carbon\Carbon::now()->addDays($faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9]));
    $ended_at = $started_at->copy()->addDays($faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9]));

    return [
        'title' => $faker->sentence(5),
        'description' => $faker->paragraph(5),
        'address' => $faker->address,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'started_at' => $started_at->format('Y-m-d'),
        'ended_at' => $ended_at->format('Y-m-d'),
        'user_id' => factory(User::class)->create()->id
    ];
});
