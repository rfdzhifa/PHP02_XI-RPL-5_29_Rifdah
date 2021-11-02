<?php
    include './koneksi.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM buku WHERE id ='$id'";

    if($conn->query($sql) === TRUE){
        echo "data berhasil dihapus<br>";
        echo "<a href='tampil.php'>Kembali</a><br>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>