<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form POST</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
    $submit = $_POST['name'];
    echo "Halo, $name! Selamat datang menggunakan metode POST.";
} else {
    echo "Silakan isi nama Anda pada formulir.";
}
?>

    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
