<?php
    include("../vendor/autoload.php");
    use Faker\Factory as Faker;
    $faker= Faker::create();
    echo $faker-> name();