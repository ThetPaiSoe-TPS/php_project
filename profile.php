<?php
// session_start();
// if (!isset($_SESSION['user'])) {
//     header("location: index.php");
//     exit();
// }
include('./vendor/autoload.php');
use Helpers\Auth;
$user= Auth::check();
?>


<!DOCTYPE html>
<hr lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="" style="">
        <h1 class="h3 my-4 text-center"><span class="bg-dark text-white py-2 px-3">Profile</span></h1>
        <div class="container">
            <div class="row">
                <div class="col-5">
                <?php if($user->photo): ?>
                    <img src="_actions/photos/<?= $user->photo ?>" class="img-thumbnail img-fluid w-75">
                <?php endif ?>
                    <form action="_actions/upload.php" class="input-group my-2" method="post" enctype="multipart/form-data">
                        <input type="file" name="photo" class="form-control"> <br> <br>
                        <button class="btn btn-secondary ">Upload</button>
                    </form>
                </div>
                <div class="col-5 d-flex">
                    <div class="align-content-center card-body">
                        <!-- <ul class="list-group mb-2">
                            <li class="list-group-item mb-3"><b class="text-uppercase text-muted">Name </b><?= $user->name ?></li>
                            <li class="list-group-item mb-3"><b class="text-uppercase text-muted">Email </b><?= $user->email ?> </li>
                            <li class="list-group-item mb-3"><b class="text-uppercase text-muted">Phone</b> <?= $user->phone ?></li>
                            <li class="list-group-item "><b class="text-uppercase text-muted">Address</b> <?= $user->address ?></li>
                        </ul> -->
                        <div class="card mb-3" style="width: 25rem;">
                            <div class="card-header h5 text-center bg-dark text-white text-fw-bold">
                                Profile Details
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b class="text-uppercase text-muted">Name </b><?= $user->name ?></li>
                                <li class="list-group-item"><b class="text-uppercase text-muted">Email </b><?= $user->email ?> </li>
                                <li class="list-group-item"><b class="text-uppercase text-muted">Phone</b> <?= $user->phone ?></li>
                                <li class="list-group-item"><b class="text-uppercase text-muted">Address</b> <?= $user->address ?></li>
                            </ul>
                        </div>

                        <div>
                            <a href="_actions/logout.php" class="text-white btn btn-danger "><i class="fa-solid text-white pe-2 fa-right-from-bracket"></i>Logout</a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>

        

        

        
    </div>
</body>

</html>