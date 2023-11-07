<?php
//Tabel Harga Barang
$harga_barang = array(
    array(
        'id' => '1.',
        'produk' => 'Pepsodent',
        'stok' => 20,
        'harga' => 10000,
        'jumlah' => 20 * 10000,
    ),
     array(
        'id' => '2.',
        'produk' => 'Sunlight',
        'stok' => 15,
        'harga' => 11000,
        'jumlah' => 15 * 11000,
    ),
      array(
        'id' => '3.',
        'produk' => 'Baygon',
        'stok' => 10,
        'harga' => 16000,
        'jumlah' => 10 * 16000,
    ),
      array(
        'id' => '4.',
        'produk' => 'Dove',
        'stok' => 18,
        'harga' => 22000,
        'jumlah' => 18 * 22000,
    ),
     array(
        'id' => '5.',
        'produk' => 'Rinso',
        'stok' => 15,
        'harga' => 20000,
        'jumlah' => 15 * 20000,
    ),
     array(
        'id' => '6.',
        'produk' => 'Downy',
        'stok' => 20,
        'harga' => 11500,
        'jumlah' => 20 * 11500,
    ),
     array(
        'id' => '7.',
        'produk' => 'Le Mineral',
        'stok' => 25,
        'harga' => 5000,
        'jumlah' => 25 * 5000,
    ),
);
echo '<table border="1">';
echo '<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>';
foreach ($harga_barang as $hargab) {
    echo '<tr>';
    echo '<td>' . $hargab['id'] . '</td>';
    echo '<td>' . $hargab['produk'] . '</td>';
    echo '<td>' . $hargab['stok'] . '</td>';
    echo '<td>' . $hargab['harga'] . '</td>';
    echo '<td>' . $hargab['jumlah'] . '</td>';
    echo '</tr>';
}
echo '</table>';
?>