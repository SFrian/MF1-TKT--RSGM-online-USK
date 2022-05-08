<?php
    // // koneksi ke database
    require 'functions.php';
    $kasus = query("SELECT * FROM kasus");
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar User</title>
</head>
<body>
    <h1>Daftar Kasus</h1>
    <a href="tambah.php">Post Kasus</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>EVENT</th>
            <th>judul Event</th>
            <th>Keterangan</th>
            <th>Kapan diselenggarakan</th>
        <tr>

        <?php $i = 1; ?>
        <?php foreach( $kasus as $row) : ?>
        <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
        <td>
            <img src="img/<?= $row["gambar"]; ?>" width="50">
        </td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["syaratketentuan"]; ?></td>   
        <td><?= $row["tanggal"]; ?></td>

        
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>

  
</body>
</html>
