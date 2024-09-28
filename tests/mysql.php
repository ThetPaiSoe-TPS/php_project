<?php
    include('../vendor/autoload.php');
    use Libs\Database\MySQL;
    $mysql= new MySQL;
    $db= $mysql->connect();
    $result= $db->query('select * from roles1');
    print_r($result->fetchAll());