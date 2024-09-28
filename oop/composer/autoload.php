<?php
    spl_autoload_register(function($class){
        $class= str_replace("\\", "/", $class); //use for it contains only class name
        include("$class.php");
    });