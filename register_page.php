<?php
session_start();
include "database.php"?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
</head>
<body>
    <?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = md5($_POST['password']); // enkripsi password dengan md5 bttw gatau aman atau engga

        $query = mysqli_query($koneksi, "INSERT INTO users (username, email, phone, password) VALUES ('$username', '$email', '$phone', '$password')");
        if($query){
            echo "<script>alert('Pendaftaran berhasil. Silahkan login.'); location.href='login_page.php';</script>";
        } else {
            echo "<script>alert('Pendaftaran gagal. Silahkan coba lagi.');</script>";
        }
    } 
    ?>
    <h1>Selamat Datang</h1>
    <p>Halo, Mari bergabung dengan kami!</p>
    <div class="register">
        <form method="post">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukkan Username" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Masukkan Email" required>
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" required pattern="^(\+62|62|0)8[1-9][0-9]{6,10}$" placeholder="Masukkan Nomor Telepon" >
                <!-- gatau format nomor indo ini bnr apa tdk -->
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
            </div>
            <div>
                <input type="checkbox" name="terms" id="terms" required>
                <label for="terms">
                    Dengan membuat akun ini saya menyetujui 
                    <a href="syarat_ketentuan.php" target="_blank">Syarat dan Ketentuan</a>
                </label>
            </div>
            <button type="submit" name="register">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="login_page.php">Masuk</a></p>
    </div>
</body>
</html>
