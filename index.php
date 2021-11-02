<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "db_buku";

    $conn = mysqli_connect($server, $user, $pass, $database) or die (mysqli_error($conn));

    if(isset($_POST['simpan']))
    {
        if($_GET['hal'] == "edit")
        {
            $edit = mysqli_query($conn, "UPDATE buku set judul ='judul', penulis ='penulis', jenis ='jenis', gambar ='gambar' WHERE id = '$_GET[id]'");

            if($edit)
            {
                echo "<script>
                        alert('Edit Data Sukses!');
                        document.location='index.php';
                        </script>";
            }
            else
            {
                echo "<script>
                        alert('Edit Data Gagal!!!');
                        document.location='index.php';
                        </script>";
            }
        }
        else 
        {
            $simpan = mysqli_query($conn, "INSERT INTO buku (judul, penulis, jenis, gambar) VALUES ('$_POST [judul]', '$_POST[penulis]', '$_POST[jenis]', '$_POST[gambar]')");

            if($simpan)
            {
                echo "<script>
                    alert('Simpan Data Sukses!');
                    document.location='index.php';
                    </script>";
            }
            else
            {
                echo "<script>
                    alert('Simpan Data Gagal!!!');
                    document.location='index.php';
                    </script>";
            }
        }
    }

    
?>