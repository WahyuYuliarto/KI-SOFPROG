<?php
session_start();
include "database.php"; // file koneksi database
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_page</title>
</head>
<body>
    <?php
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");

            if(mysqli_num_rows($query) > 1){
                $data = mysqli_fetch_array($query);
                $_SESSION['users'] = $data;
                echo "<script>alert('Selamat Datang, {$data["username"]}'); location.href='home_page.php';</script>";
            } else {
                echo "<script>alert('Username/Password tidak sesuai.');</script>";

            }
        }
    ?>
    <h1>Selamat Datang</h1>
    <p>Halo, Silahkan Masuk!</p>
    <div class="login">
        <form method="post">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" required>
            </div>
            <a href="forgot_password.php">Lupa Password?</a>
            <button type="submit">Masuk</button>
        </form>
    </div>
    <p>Belum memiliki akun?</p>
    <a href="register_page.php">Daftar</a>
</body>
</html>