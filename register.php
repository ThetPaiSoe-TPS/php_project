<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-4">
        <h1 class="mb-4"><span class="bg-primary text-white px-2 py-2 rounded-3 ">Register</span></h1>
        <div class="col-4 offset-4">
        <form action="_actions/create.php" method="post">
            <input type="text" name="name" placeholder="Enter Name..." class="form-control mb-3" required>
            <input type="email" name="email" placeholder="Enter Email..." class="form-control mb-3" required>
            <input type="tel" name="phone" placeholder="Enter phone..." class="form-control mb-3" required>
            <input type="text" name="address" placeholder="Enter address..." class="form-control mb-3" required>
            <input type="password" name="password" placeholder="Enter password..." class="form-control mb-3" required>
            <button class="btn btn-outline-primary w-100">Create</button>
        </form>
        </div>
    </div>
</body>
</html>