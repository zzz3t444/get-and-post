<?php
// pengulangan pda array
// for / foreach
$angka = [3,4,5,7,6,90,12];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <?php for( $i = 0; $i < 7; $i++ ) { ?>

    <div><?php echo $angka[$i]; ?></div>

<?php } ?>


</body>
</html>