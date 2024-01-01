<?php

$negara = array();
$negara["Indonesia"] = array("ibukota" => "D.KI Jakarta", "kode_telepon" => "+62");
$negara["Singapura"] = array("ibukota" => "Singapura", "kode_telepon" => "+65");
$negara["Malaysia"] = array("ibukota" => "Kuala Lumpur", "kode_telepon" => "+60");
$negara["Brunei"] = array("ibukota" => "Bandar Seri Begawan", "kode_telepon" => "+673");
$negara["Thailand"] = array("ibukota" => "Bangkok", "kode_telepon" => "+66");
$negara["Laos"] = array("ibukota" => "Vientiane", "kode_telepon" => "+856");
$negara["Filipina"] = array("ibukota" => "Manila", "kode_telepon" => "+63");
$negara["Myanmar"] = array("ibukota" => "Naypyidaw", "kode_telepon" => "+95");

// Tampilkan array dalam bentuk tabel
echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";
foreach ($negara as $negara => $data) {
    echo "<tr><td>$negara</td><td>$data[ibukota]</td><td>$data[kode_telepon]</td></tr>";
}
echo"</table>";

?>