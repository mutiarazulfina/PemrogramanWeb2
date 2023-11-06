<?php 
$ASEAN = [
    "Indonesia" => "D.K.I jakarta",
    "Singapura" => "Singapura",
    "Malaysia"  => "Kuala Lumpur",
    "Brunei Darussalam"    => "Bandar Seri Begawan",
    "Thailand"  => "Bangkok",
    "Laos"      => "Vientiane",
    "Filipina"  => "Manila",
    "Myanmar"   => "Naypyidaw",
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas3</title>
</head>
<body>
    <?php foreach ($ASEAN as $negara => $kota) : ?>
        <li><?php echo "$negara : $kota" ?></li>
    <?php endforeach ?>
</body>
</html>