<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "rplx");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    // ambil data dari tiap elemen dalam form
    $judul = htmlspecialchars($data["judul"]);
    $halaman = htmlspecialchars($data["halaman"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $genre = htmlspecialchars($data["genre"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $diterbitkan = htmlspecialchars($data["diterbitkan"]);
    $isbn = htmlspecialchars($data["isbn"]);

    // query insert data 
    $query = "INSERT INTO table_buku 
                VALUES
                (NULL, '$judul', '$halaman', '$pengarang', '$genre', '$penerbit', '$diterbitkan', '$isbn')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM table_buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;

    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $halaman = htmlspecialchars($data["halaman"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $genre = htmlspecialchars($data["genre"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $diterbitkan = htmlspecialchars($data["diterbitkan"]);
    $isbn = htmlspecialchars($data["isbn"]);

    // query insert data 
    $query = "UPDATE table_buku SET
                judul = '$judul',
                halaman = '$halaman',
                pengarang = '$pengarang',
                genre = '$genre',
                penerbit = '$penerbit',
                diterbitkan = '$diterbitkan',
                isbn = '$isbn'
            WHERE id = $id;
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM table_buku
                WHERE
                judul LIKE '%$keyword%' OR
                halaman LIKE '%$keyword%' OR
                pengarang LIKE '%$keyword%' OR
                genre LIKE '%$keyword%' OR
                penerbit LIKE '%$keyword%' OR
                diterbitkan LIKE '%$keyword%' OR
                isbn LIKE '%$keyword%'
            ";
    return query($query);
}

?>