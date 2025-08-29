<?php
session_start();
// cek sesion user kalau berhasil, kalau ga arahin ke login page
if(!isset($_SESSION['users'])){
    header("Location: login_page.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <!-- BAGIAN NOTIFIKASI BELOM -->
    <div class="kartu">
        <h1>Hi, <?php echo $_SESSION['users']['username']; ?> </h1>
        <p>Saldo Tersedia</p>
        <h2>Rp.</h2>
    </div>
    <div class="menu">
        <div onclick="location.href='tukar_sampah_page.php'">♻️<br>Tukar sampah</div>
        <div onclick="location.href='tarik_saldo_page.php'">💸<br>Tarik Saldo</div>
        <div onclick="location.href='riwayat_page.php'">📑<br>Riwayat</div>
    </div>

    <!-- yang bagian dashboar kebawah ini belum di eksekusi PUSINGNYO-->
    <div class="dashboard">
        <div>
            <p>Total Pendapatan</p>
            <h3>Rp.59.000</h3>
        </div>
        <div>
            <p>Total Berat Sampah</p>
            <h3>20 KG</h3>
        </div>
    <div class="grafik">
        <h4>
            Hasil Tukar sampah
        </h4>
    </div>
    <nav class="bottom-navbar">
        <a href="home_page.php"><span>🏠</span>Home</a>
        <a href="tukar_sampah_page.php"><span>♻️</span>Tukar</a>
        <a href="riwayat_page.php"><span>📑</span>Riwayat</a>
        <a href="settings_page.php"><span>⚙️</span>Pengaturan</a>
    </nav>
</body>
</html>