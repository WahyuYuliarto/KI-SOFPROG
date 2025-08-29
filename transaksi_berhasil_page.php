<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Berhasil</title>
</head>
<!-- BELUM EKSEKUSI -->
<body>
    <h2>Selamat Transaksi <span style="color:green;">Berhasil</span></h2>
    <p><?= date("d M Y", strtotime($data['tanggal'])) ?></p>

    <!-- <div class="nota">
        <p><b>Nama:</b> <?= $data['nama'] ?></p>
        <p><b>Alamat:</b> <?= $data['alamat'] ?></p>
        <p><b>Telepon:</b> <?= $data['telepon'] ?></p>
        <p><b>ID Transaksi:</b> <?= $data['id_transaksi'] ?></p>
        <p><b>Tanggal:</b> <?= $data['tanggal'] ?></p>
        <p><b>Berat Sampah:</b> <?= $data['berat'] ?> Gram</p>
        <p><b>Harga per Gram:</b> Rp <?= $data['harga_per_gram'] ?></p>
        <h3>Total: Rp <?= number_format($data['total'],0,',','.') ?></h3>
    </div> -->
    <nav class="bottom-navbar">
        <a href="home_page.php"><span>🏠</span>Home</a>
        <a href="tukar_sampah_page.php"><span>♻️</span>Tukar</a>
        <a href="riwayat_page.php"><span>📑</span>Riwayat</a>
        <a href="settings_page.php"><span>⚙️</span>Pengaturan</a>
    </nav>
</body>
</html>