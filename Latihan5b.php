<?php 
$mahasiswa = [
[
        "Nama" => "Mutiara Zulfina",
        "Foto" => "tiara.jpg",  
        "Email" => "zoelfinamutiara@gmail.com",
        "Jurusan" => "Sistem Informasi",
        "Universitas" => "Universitas Islam Negeri Sulthan Thaha Saifuddin Jambi"
],
[
        "Nama" => "Izumi",
        "Foto" => "izumi.jpg",
        "Email" => "ezoome@gmail.com",
        "Jurusan" => "Sistem Informasi",
        "Universitas" => "Universitas Islam Negeri Sulthan Thaha Saifuddin Jambi"
],
[
        "Nama" => "Dong ShiCheng",
        "Foto" => "winwin.jpg",
        "Email" => "win2@gmail.com",
        "Jurusan" => "Sistem Informasi",
        "Universitas" => "Universitas Islam Negeri Sulthan Thaha Saifuddin Jambi"
],
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiwa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FAF8ED;
            text-align: center;
        }
        .box{
            width: 450px;
            height: 500px;
            background-color: #D2E3C8;
            padding: 10px;
            margin: 10px auto;
        }
        .card {
            width: 370px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            padding: 10px;
            margin: 20px auto;
            transition: all .3s;
            border: solid 8px gray;
        }
        .card:hover {
            background-color: #fff;
            border: solid 8px red;
        }
       
        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            float: left;
            margin-bottom: 10px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    
<h1>Daftar Mahasiwa</h1>
<div class="box">
<?php foreach ($mahasiswa as $mhs) : ?> 
    <div class="card">
        <img class="profile-image" src="Foto/<?= $mhs["Foto"];?>">
        <h2><a href="Latihan5c.php?Nama=<?= $mhs["Nama"];?>&Foto=<?= $mhs ["Foto"];?>&Email=<?= $mhs ["Email"];?>&Jurusan= <?= $mhs ["Jurusan"];?>&Universitas= <?= $mhs ["Universitas"]; ?>"><?= $mhs ["Nama"];?></a></h2>
        <p><?= $mhs["Email"];?></p>
    </div>
<?php endforeach; ?>
</div>   
</body>
</html>