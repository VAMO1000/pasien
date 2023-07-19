<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <!-- Menggunakan Bootstrap CSS dari folder "assets" -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Sign Up Form</h2>
        <form action="koneksi.php" method="post">
            <div class="form-group">
                <label for="new_username">New Username:</label>
                <input type="text" class="form-control" name="new_username" required>
            </div>

            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" class="form-control" name="new_password" required>
            </div>

            <div class="form-group">
                <label for="new_role">Role:</label>
                <select class="form-control" name="new_role" required>
                    <option value="user">User</option>
                    <option value="customer">Customer</option>
                </select>
            </div>

            <input name="sign_up" type="submit" class="btn btn-primary" value="Sign Up">
        </form>
    </div>

    <!-- Menggunakan Bootstrap JS dan jQuery dari folder "assets" -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
       