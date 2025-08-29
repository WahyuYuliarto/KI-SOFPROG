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
    <title>Tukar Sampah</title>
    <!-- ini misal mau nambahin style pke css yh -->
    <!-- <source><link rel="stylesheet" href="styles.css"></source> -->
    <!-- <script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script> INI LIBRARY QR CODE BELUM FIX YH -->
</head>
<body>
    <div class="header">
        <a href="home_page.php">Tukar Sampah</a>
    </div>
    <div class="container">
        <!-- ini di ganti desain darri front end yh -->
        <div class="QR-ICON">📷</div>
        <h2>Get Started</h2>
        <p>
            Sebelum menukarkan sampah, harap melakukan scan pada barcode alat penimbang berat sampah
        </p>
        <form action="scan_barcode_page.php" method="get">
            <button type="submit" class="button">Scan Barcode</button>
        </form>
    </div>
    <nav class="bottom-navbar">
        <a href="home_page.php"><span>🏠</span>Home</a>
        <a href="tukar_sampah_page.php"><span>♻️</span>Tukar</a>
        <a href="riwayat_page.php"><span>📑</span>Riwayat</a>
        <a href="settings_page.php"><span>⚙️</span>Pengaturan</a>
    </nav>
</body>
</html>