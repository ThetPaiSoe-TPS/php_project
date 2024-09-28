<?php

    include("vendor/autoload.php");

    use Carbon\Carbon;
    use App\Library\Math;
    
    echo Carbon::now()->addDay();
    echo "<br>";
    echo Math::add(1, 2);
    echo "<hr>";

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods
echo "Name: ". $faker->name();
echo "<br>";
// 'Vince Sporer'
echo "Email: ". $faker->email();
// 'walter.sophia@hotmail.com'