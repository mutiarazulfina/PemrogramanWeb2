<?php
// Membuat array dengan 5 elemen negara ASEAN
echo "<h3>Daftar Negara ASEAN awal:</h3>";
$ASEAN = ["Indonesia", "Singapore", "Malaysia", "Brunei Darussalam", "Thailand"];

//Menampilkan isi array sebagai daftar HTML
echo "<ul>";
foreach ($ASEAN as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

// Menambahkan 3 elemen baru dengan array_push dan menggabungkannya secara vertikal
array_push($ASEAN, "Laos","Filipina", "Myanmar");

// Menampilkan isi array setelah penambahan elemen baru
echo "<h3>Daftar Negara ASEAN baru:</h3>";
echo "<ul>";
foreach ($ASEAN as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>