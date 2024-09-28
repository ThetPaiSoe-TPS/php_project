<?php

// $type = $_FILES['photo']['type'];
// $tmp_name = $_FILES['photo']['tmp_name'];

// if ($type == "image/jpeg" or $type == "image/png" or $type== "image/jpg") {
//     move_uploaded_file($tmp_name, "photos/img.jpeg");
//     header("location: ../profile.php");
// } else {
//     header("location: ../profile.php?error=type");
// }

// upload photo from db
include('../vendor/autoload.php');

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$user= Auth::check();

$name= $_FILES['photo']['name'];
$type = $_FILES['photo']['type'];
$tmp_name = $_FILES['photo']['tmp_name'];

if ($type == "image/jpeg" or $type == "image/png" or $type== "image/jpg") {
    $table = new UsersTable(new MySQL);
    $table->updatePhoto($user->id, $name);
    $user->photo= $name;
    move_uploaded_file($tmp_name, "photos/$name");
    HTTP::redirect('/profile.php');
} else {
    HTTP::redirect('/profile.php', 'error=type');
}
