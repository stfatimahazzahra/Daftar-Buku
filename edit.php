<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data buku berdasarkan id
$books = query("SELECT * FROM table_buku WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di edit atau tidak
    if (edit($_POST)  > 0) {
        echo "
            <script>
                alert('Data berhasil diedit!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diedit!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
</head>

<body>

    <h2>Edit Data Buku</h2>

    <form method="POST" action="">
        <input type="hidden" name="id" value="<?= $books["id"]; ?>">
        <table border="1" cellpadding="9" cellspacing="0">
            <tr>
                <td><span>Judul</span></td>
                <td><input type="text" name="judul" autocomplete="off" required value="<?= $books["judul"]; ?>"></td>
            </tr>
            <tr>
                <td><span>Halaman</span></td>
                <td><input type="number" name="halaman" autocomplete="off" required value="<?= $books["halaman"]; ?>"></td>
            </tr>
            <tr>
                <td><span>Pengarang</span></td>
                <td><input type="text" name="pengarang" autocomplete="off" required value="<?= $books["pengarang"]; ?>"></td>
            </tr>
            <tr>
                <td><span>Genre</span></td>
                <td><input type="text" name="genre" autocomplete="off" required value="<?= $books["genre"]; ?>"></td>
            </tr>
            <tr>
                <td><span>Penerbit</span></td>
                <td><input type="text" name="penerbit" autocomplete="off" required value="<?= $books["penerbit"]; ?>"></td>
            </tr>
            <tr>
                <td><span>Diterbitkan</span></td>
                <td><input type="text" name="diterbitkan" autocomplete="off" required value="<?= $books["diterbitkan"]; ?>"></td>
            </tr>
            <tr>
                <td><span>ISBN</span></td>
                <td><input type="text" name="isbn" autocomplete="off" required value="<?= $books["isbn"]; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Edit Data!"></td>
            </tr>
        </table>
    </form>

</body>

</html>