<?php
    include './koneksi.php';
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $jenis = $_POST['jenis'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE buku set judul ='judul', penulis ='penulis', jenis ='jenis', gambar ='gambar' WHERE id ='$id'";
    if($conn->query($sql) === TRUE){
        echo "Ubah Data Berhasil <br>";
        echo "<A href='tampil.php'>Kembali</a><br>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
    } 
?>