<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST)  > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
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
    <title>Tambah Data Buku</title>
</head>

<body>

    <h2>Tambah Data Buku</h2>

    <form method="POST" action="">
        <table border="1" cellpadding="9" cellspacing="0">
            <tr>
                <td><span>Judul</span></td>
                <td><input type="text" name="judul" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><span>Halaman</span></td>
                <td><input type="number" name="halaman" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><span>Pengarang</span></td>
                <td><input type="text" name="pengarang" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><span>Genre</span></td>
                <td><input type="text" name="genre" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><span>Penerbit</span></td>
                <td><input type="text" name="penerbit" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><span>Diterbitkan</span></td>
                <td><input type="text" name="diterbitkan" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><span>ISBN</span></td>
                <td><input type="text" name="isbn" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Tambah Data!"></td>
            </tr>
        </table>
    </form>



</body>

</html>