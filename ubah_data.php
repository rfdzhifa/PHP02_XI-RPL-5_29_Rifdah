<?php
    include './koneksi.php';
    $id_buku= $_GET['id_buku'];

    $sql = "SELECT * FROM buku WHERE id_buku=".$id_buku;
    $result = $conn->query($sql);

?>

<form action="ubah.php" method="post">
    <input type="hidden" name="id" value="<?php echo $result['id']?>">
    <table>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><input type="text" name="judul" value="<?php echo $result['judul']?>"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name="penulis" value="<?php echo $result['penulis']?>"></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><input type="text" name="jenis" value="<?php echo $result['jenis']?>"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar" value="<?php echo $result['gambar']?>"></td>
        </tr>
    </table>
    <input type="submit" name="simpan" value="SIMPAN">
</form>