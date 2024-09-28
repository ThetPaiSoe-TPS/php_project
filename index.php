<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-4" style="max-width: 600px">
        <h1 class="h3">login</h1>

        <?php if(isset($_GET['register'])): ?>
            <div class="alert alert-info">
                Account created, please login
            </div>
        <?php endif ?>

        <?php if(isset($_GET['incorrect'])) :  ?>
            <div class="alert alert-warning">
                Incorrect Email or Password
            </div>
        <?php endif ?>

        <form action="_actions/login.php" method="post" class="my-2">
            <input type="email" class="form-control mb-2" name="email"
             placeholder="Email" required>
            <input type="password" class="form-control mb-2" name="password"
             placeholder="Password" required>
            <button class="btn btn-primary w-100">Login</button>
        </form>

        <a href="register.php" class="btn btn-outline-primary">Register</a>
    </div>
</body>
</html>