<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET</title>
</head>
<body>
<?php
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    echo "Halo, $nama ! Selamat datang menggunakan metode GET.";
} else {
    echo "Silakan isi nama Anda pada formulir.";
}

?>
    <form action="" method="get">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>
