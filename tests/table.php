<?php
    include("../vendor/autoload.php");
    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    $table= new UsersTable(new MySQL);
    $id= $table->insert([
        "name"=> "Alice1",
        "email"=> "alice1@gmail.com",
        "phone"=> "09876234671",
        "address"=> "Mandalay",
        "password"=> "password"
    ]);
    echo $id;