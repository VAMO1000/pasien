<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <!-- Menggunakan Bootstrap CSS dari folder "assets" -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Login Form</h2>
        <form action="koneksi.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <select class="form-control" name="role" required>
                    <option value="user">User</option>
                    <option value="customer">Customer</option>
                </select>
            </div>

            <input type="submit" class="btn btn-primary mt-2" value="Login">
                <a href="sign_up.php"><button class="btn btn-primary mt-2" type="button">Sign Up</button>
                </a>
            </div>
        </form>
    </div>

    <!-- Menggunakan Bootstrap JS dan jQuery dari folder "assets" -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>