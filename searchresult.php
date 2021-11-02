<html>
<head>
    <style>
    </style>
</head>
<body>
    <?php
        $kolom = isset ($_POST['kolom']) ? $_POST['kolom'] : '';
        $find = isset ($_POST['Find']) ? $_POST['Find'] : '';
        $link = mysqli_connect ("localhost","root","","db_buku");
        $result = mysqli_query($link, "SELECT * FROM buku WHERE $kolom like '%Find%'");
        $jumlah = mysqli_num_rows ($result);
        echo "<br>";
        echo "Found : $jumlah";
        echo "<br>";
        while ($baris=mysqli_fetch_array($result))
        {
            echo "Judul      : " . $baris[1] . "<br>";
            echo "Penulis    : " . $baris[2] . "<br>";
            echo "Jenis      : " . $baris[3] . "<br>";
            echo "Alamat     : " . $baris[4] . "<br>";
        }
    ?>
</body>
</html>