<?php
session_start();
include "database.php"; // file koneksi database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <div class="header">
        <a href="tukar_sampah_page.php">Tukar Sampah</a>
    </div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan Barcode</title>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <!-- <style>
        .bottom-navbar {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background: #f8f8f8;
            border-top: 1px solid #ccc;
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            z-index: 100;
        }
        .bottom-navbar a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 8px 12px;
        }
        .bottom-navbar a:hover {
            color: #007bff;
        }
    </style> -->
</head>
<body>
    <h2>Scan Barcode</h2>
    <div id="reader" style="width:300px"></div>
    <div id="scan-result"></div>
    <script>
        const scanner = new Html5QrcodeScanner('reader', {
            qrbox: {
                width: 250,
                height: 250
            },
            fps: 20,
        });

        function success(result) {
            document.getElementById('scan-result').innerHTML = 
                `<h2>Success!</h2>
                <p><a href="${result}">${result}</a></p>`;
            scanner.clear();
            document.getElementById('reader').remove();
            // Anda bisa melakukan aksi lain di sini, misal redirect atau submit form   
        }

        function error(err) {
            // Bisa diisi jika ingin menampilkan pesan error
            // console.warn(err);
        }

        scanner.render(success, error);
    </script>
    <nav class="bottom-navbar">
        <a href="home_page.php"><span>🏠</span>Home</a>
        <a href="tukar_sampah_page.php"><span>♻️</span>Tukar</a>
        <a href="riwayat_page.php"><span>📑</span>Riwayat</a>
        <a href="settings_page.php"><span>⚙️</span>Pengaturan</a>
    </nav>
</body>
</html>