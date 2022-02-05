<?php
require 'functions.php';

$buku = query("SELECT * FROM table_buku");

// tombol cari ditekan 
if (isset($_POST["cari"])) {
    $buku = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD DATA dan MySQLi</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
        <h1>Daftar Buku</h1>
    <a href="tambah.php">+Tambah Data</a>
    <br><br>

    <form method="POST" action="">
        <label>
            <input type="text" name="keyword" style="width: 230px;" placeholder="Masukkan keyword pencarian.." autocomplete="off" autofocus required>
            <button type="submit" name="cari"><i class="search">Cari!</i></button>
        </label>
    </form>
    <br><br>

    <table border="1" cellpadding="9" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>Judul</th>
                <th>Halaman</th>
                <th>Pengarang</th>
                <th>Genre</th>
                <th>Penerbit</th>
                <th>Diterbitkan</th>
                <th>ISBN</th>
                <th>Aksi</th>
            </tr>
        <?php $i = 1; ?>
        <?php foreach ($buku as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["judul"]; ?></td>
                    <td><?= $row["halaman"]; ?></td>
                    <td><?= $row["pengarang"]; ?></td>
                    <td><?= $row["genre"]; ?></td>
                    <td><?= $row["penerbit"]; ?></td>
                    <td><?= $row["diterbitkan"]; ?></td>
                    <td><?= $row["isbn"]; ?></td>
                    <td>
                        <a class="cool-link" href="edit.php?id=<?= $row["id"]; ?>">EDIT</a> |
                        <a class="cool-link" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">HAPUS</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
    </table>

</body>

</html>