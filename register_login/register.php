<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex align-items-center justify-content-center" style="height:100vh;">
    <div class="container col-5 shadow p-5 rounded-3">
        <form action="register.php" method="post">
            <h1 class="text-center mb-3">Register</h1>
            <div class="form-group mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-group mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" required>
            </div>
            <div class="form-group mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
            </div>
            <div class="form-group mb-2">
                <label for="resetpasword" class="form-label">Reset Password</label>
                <input type="password" class="form-control" name="resetpassword" id="resetpassword" placeholder="Ulangi Password" required>
            </div>
            <p class="mb-5">Sudah memiliki akun?<a href="login.php">Login</a></p>
            <div class="form-group">
                <button type="submit" class="btn btn-primary col-12">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>