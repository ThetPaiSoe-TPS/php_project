<?php
    // include("Libs/Database/Table.php");
    // include("Support/Math.php");

    include("autoLoad.php");

    use Libs\Database\Table;
    use Support\Math;

    $table= new Table;
    $table-> get();

    echo "<br>";

    $math= new Math;
    $math-> add(1, 2);