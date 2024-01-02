<?php
include('koneksi.php'); // Hubungkan ke database jika diperlukan

// Set header untuk memberitahu browser bahwa ini adalah file CSV yang akan diunduh
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="daftar_instrukturA.csv"');

// Buka output file untuk menulis data CSV
$output = fopen('php://output', 'w');

// Header CSV (nama kolom)
fputcsv($output, array('No', 'Foto', 'Nama', 'Jenis Kelamin', 'TTL', 'Kelas', 'Alamat', 'No. HP', 'Email'));

// Ambil data instruktuur dari database
$data = mysqli_query($koneksi, "SELECT * FROM instruktur");

// Tulis data instruktur ke dalam file CSV
$no = 1;
while ($d = mysqli_fetch_array($data)) {
    fputcsv($output, array(
        $no++,
        $d['gambar'],
        $d['nama'],
        $d['jeniskelamin'],
        $d['ttl'],
        $d['kelas'],
        $d['alamat'],
        $d['nohp'],
        $d['email']
    ));
}

// Tutup file CSV
fclose($output);
?>
