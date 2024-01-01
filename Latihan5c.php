<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mutiara Zulfina</title>
    <link href="uin2.jpg" rel="shortcut icon">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #FAF8ED;
        text-align: center;
      } 
      .box{
            width: 400px;
            height: 450px;
            background-color: #D2E3C8;
            padding: 10px;
            margin: 10px auto;
      }
      .card {
            width: 330px;
            height: 370px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: all .3s;
            padding: 20px;
            margin: 10px auto;
            border: solid 8px gray;
      }
      .card:hover {
            background-color: #fff;
            border: solid 8px red;
      }
      .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            float: inherit;
            margin-bottom: 10px;
      }
      .kembali {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
      }
    </style>
  </head>
  <body>
  <h1>Profil Mahasiswa</h1>
  <div class="box">

      <div class="card">
        <img class="profile-image" src="Foto/<?= $_GET["Foto"];?>">
        <h2><?= $_GET["Nama"]; ?></h2>
        <p><?= $_GET["Email"]; ?></p>
        <p><?= $_GET["Jurusan"]; ?><?= $_GET["Universitas"]; ?></p>
        <a href="Latihan5b.php" class="kembali">Kembali</a>
    </div>
</div>
  </body>
</html>