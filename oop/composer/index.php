<?php
   ;

    include("vendor/autoLoad.php");

    use Libs\Database\Table;
    use Support\Math;
    use Carbon\Carbon;

    echo Carbon::now()-> addDay(5);
    echo "<br>";

    $table= new Table;
    $table-> get();

    echo "<br>";

    $math= new Math;
    $math-> ad(1, 2);
    