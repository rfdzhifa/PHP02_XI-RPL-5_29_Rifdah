<?php
    include './koneksi.php';

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $jenis = $_POST['jenis'];
    $gambar = $_POST['gambar'];

    $sql = "INSERT INTO buku (judul, penulis, jenis, gambar) VALUES ('$judul', '$penulis', '$jenis', '$gambar')";
    if($conn->query($sql) === TRUE){
        echo "simpan berhasil <br>";
        echo "<a href='form.php'>Kembali</a><br>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>