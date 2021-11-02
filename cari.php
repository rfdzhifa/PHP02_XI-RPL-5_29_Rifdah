<html>
<head>
</head>
<body>
    <h1>Search Data</h1>
    <form action="searchresult.php" method="post">
        <select name="kolom">
            <option value="judul">Judul</option>
            <option value="penulis">Penulis</option>
            <option value="jenis">Jenis</option>
            <option value="gambar">Gambar</option>
        </select>

        <input type="text" type="text" name="Find">
        <input type="submit" value="Find">
    </form>
</body>
</html>