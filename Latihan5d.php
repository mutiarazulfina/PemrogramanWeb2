<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifikasi</title>
</head>
<body>
    <hr>
    <form method="post" action="">
        Masukkan angka: <input type="text" name="angka">
        <input type="submit" name="submit" value="Tampilkan!">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Memeriksa apakah input angka tidak kosong 
        if (!empty($_POST["angka"]) && is_numeric($_POST["angka"])) {
            $angka = $_POST["angka"];

            // Membuat segitiga ke bawah
            for ($i = $angka; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $j . " ";
                }
                echo "<br>";
            }
        } else {
            echo "Masukkan angka yang valid.";
        }
    }
    ?>
</body>
</html>
