<?php
include('koneksi.php'); // Hubungkan ke database jika diperlukan

// Set header untuk memberitahu browser bahwa ini adalah file CSV yang akan diunduh
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="daftar_pesertaA.csv"');

// Buka output file untuk menulis data CSV
$output = fopen('php://output', 'w');

// Header CSV (nama kolom)
fputcsv($output, array('No', 'Foto', 'Nama', 'Jenis Kelamin', 'Pin', 'Kelas', 'Alamat', 'No. HP', 'Instruktur'));

// Ambil data pegawai dari database
$data = mysqli_query($koneksi, "SELECT * FROM peserta");

// Tulis data peserta ke dalam file CSV
$no = 1;
while ($d = mysqli_fetch_array($data)) {
    fputcsv($output, array(
        $no++,
        $d['gambar'],
        $d['nama'],
        $d['jeniskelamin'],
        $d['pin'],
        $d['kelas'],
        $d['alamat'],
        $d['nohp'],
        $d['instruktur']
    ));
}

// Tutup file CSV
fclose($output);
?>
