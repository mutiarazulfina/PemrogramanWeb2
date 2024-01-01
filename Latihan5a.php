<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mutiara Zulfina</title>
	<link href="uin2.jpg" rel="shortcut icon">
</head>
<body>
	<?php
    $angka = isset($_GET['angka']) ? intval($_GET['angka']) : 0; 
        for ($i = 0;$i < $angka; $i++){
        	for($j = 0;$j < $angka - $i; $j++){
        		printf(' %d ', $j + 1);
        	}
        	echo"<br>";
        } ?>
</body>
</html>