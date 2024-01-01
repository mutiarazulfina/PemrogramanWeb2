<?php
// Data perusahaan teknologi dalam bentuk associative array
$perusahaan_teknologi = array(
    array(
        'gambar' => '1.jpeg',
        'nama' => 'Apple Inc.',
        'tahun_didirikan' => 1976,
        'pendiri' => 'Steve Jobs, Steve Wozniak, Ronald Wayne',
        'produk_utama' => 'iPhone, MacBook, iPad',
    ),
    array(
        'gambar' => '2.jpeg',
        'nama' => 'Microsoft Corporation',
        'tahun_didirikan' => 1975,
        'pendiri' => 'Bill Gates, Paul Allen',
        'produk_utama' => 'Windows, Office, Xbox',
    ),
    array(
        'gambar' => '3.jpeg',
        'nama' => 'Meta Platforms',
        'tahun_didirikan' => 2004,
        'pendiri' => 'Mark Zuckerberg',
        'produk_utama' => 'Facebook',
    ),
    array(
        'gambar' => '4.jpeg',
        'nama' => 'Intel',
        'tahun_didirikan' => 1968,
        'pendiri' => 'Gordon Moore, Robert Noyce',
        'produk_utama' => 'iGPU, SoCs, Network Interface Controllers',
    ),
    array(
        'gambar' => '5.jpeg',
        'nama' => 'International Business Machines Corporation (IBM)',
        'tahun_didirikan' => 1911,
        'pendiri' => 'Charles Ranlett Flint',
        'produk_utama' => 'System P (Server Unix), WebSphere',
    ),
    array(
        'gambar' => '6.jpeg',
        'nama' => 'Amazon.com',
        'tahun_didirikan' => 1994,
        'pendiri' => 'Jeff Bezos',
        'produk_utama' => 'Echo, Fire TV, Kindle',
    ),
    array(
        'gambar' => '7.jpeg',
        'nama' => 'Samsung Electronics Co.',
        'tahun_didirikan' => 1969,
        'pendiri' => 'Lee Byung Chul',
        'produk_utama' => 'Smartphone Samsung, TV Samasung',
    ),
    array(
        'gambar' => '8.jpeg',
        'nama' => 'Alphabet Inc.',
        'tahun_didirikan' => 2015,
        'pendiri' => 'Larry Page',
        'produk_utama' => 'X Development, Calico, Nest',
    ),
    array(
        'gambar' => '9.jpeg',
        'nama' => 'Cisco Systems, Inc.',
        'tahun_didirikan' => 1984,
        'pendiri' => 'Leonard Bosack, Sandy Lerner',
        'produk_utama' => 'Cisco Cius',
    ),
    array(
        'gambar' => '10.jpeg',
        'nama' => 'Tencent Holding Ltd',
        'tahun_didirikan' => 1998,
        'pendiri' => 'Ma Huateng',
        'produk_utama' => 'WeChat',
    ),
    // Tambahkan entri perusahaan lain di sini
);

// Membuat tabel HTML untuk menampilkan data
echo '<table border="1">';
echo '<tr><th>Gambar</th><th>Nama Perusahaan</th><th>Tahun Didirikan</th><th>Pendiri</th><th>Produk Utama</th></tr>';
foreach ($perusahaan_teknologi as $perusahaan) {
    echo '<tr>';
    echo '<td><img src="' . $perusahaan['gambar'] . '" alt="' . $perusahaan['nama'] . '" height="200", width="400"></td>';
    echo '<td>' . $perusahaan['nama'] . '</td>';
    echo '<td>' . $perusahaan['tahun_didirikan'] . '</td>';
    echo '<td>' . $perusahaan['pendiri'] . '</td>';
    echo '<td>' . $perusahaan['produk_utama'] . '</td>';
    echo '</tr>';
}
echo '</table>';
?>