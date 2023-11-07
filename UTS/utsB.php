<?php
// Informasi transaksi
$tanggalTransaksi = date("Y-m-d");
$produk1 = "Pepsodent (2x10000) :";
$produk2 = "Rinso (3x20000) :";
$produk3 = "Dove (2x22000) :";
$total1 = 2 * 10000; // Harga Produk A adalah $10000
$total2 = 3 * 20000; // Harga Produk B adalah $20000
$total3 = 2 * 22000; // Harga Produk C adalah $22000
// Menghitung total pembelian
$totalPembelian = $total1 + $total2 + $total3;

// Diskon (misalnya, diskon 10% jika total pembelian di atas $50000)
$diskon = 0;
if ($totalPembelian > 50000) {
    $diskon = $totalPembelian * 0.10; // Diskon 10%
}

// Menghitung total pembayaran setelah diskon
$totalSetelahDiskon = $totalPembelian - $diskon;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembelian</title>
    <style>
        .struk {
            width: 300px;
            border: 1px solid #000;
            padding: 10px;
        }

        .title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .content {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="struk">
        <div class="title">Struk Pembelian</div>
    <br>
        <div class="content">
    <p>Tanggal Transaksi: <?php echo $tanggalTransaksi; ?></p>
    <p>Produk:</p>
    <?php echo $produk1; ?> Rp.<?php echo $total1; ?>
</br>
    <?php echo $produk2; ?> Rp.<?php echo $total2; ?>
</br>
    <?php echo $produk3; ?> Rp.<?php echo $total3; ?>
    <p>Total Pembelian: Rp.<?php echo $totalPembelian; ?></p>
    <p>Diskon: Rp.<?php echo $diskon; ?></p>
    <h3>Total Pembayaran: Rp.<?php echo $totalSetelahDiskon; ?></h3>
    <hr>
    <p>Terima kasih telah berbelanja!</p>
</body>
</html>