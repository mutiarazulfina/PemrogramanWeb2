<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Kursus D'LANGUAGE</title>
    <link href="logo.png" rel="shortcut icon">
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        font-family: "castellar";
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 10px #black;
      border-collapse: collapse;
      border-spacing: 5;
      width: 95%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 10px #black;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 10px #black;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 13px;
    }
    </style>
  </head>
  <body>
    <center><h1>
    Data Peserta Kursus</h1><center>
    <center><a href="tambah_peserta.php">+ &nbsp; Tambah Peserta</a><center>
      <form action="" method="get">
    <br/>
    <center><label>Cari :</label>
  <input type="text" name="cari">
  <input type="submit" value="Cari">
<?php 
if(isset($_POST['cari'])){
  $cari = $_POST['cari'];
  echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
  <br/>
    <br/>
    <table>
      <table border = "1">
      <thead>
        <tr>
          <th><center>No</center></th>
          <th><center>Foto</center></th>
          <th><center>Nama</center></th>
          <th><center>Pin</center></th>
          <th><center>Nilai Pertama</center></th>
          <th><center>Nilai Kedua</center></th>
          <th><center>Nilai Ketiga</center></th>
          <th><center>Nilai Ujian</center></th>
          <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
      <?php 
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($koneksi,"select * from nilai where nama like '%".$cari."%'");       
  }else{
    $data = mysqli_query($koneksi,"select * from nilai");   
  }
  $no = 1;
  while($d = mysqli_fetch_array($data)){
  ?>
       <tr>
          <td><?php echo $no++ ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $d['gambar']; ?>" style="width: 120px;"></td>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['pin']; ?></td>
          <td> <?php echo $d['nilaisatu']; ?></td>
          <td> <?php echo $d['nilaidua']; ?></td>
          <td> <?php echo $d['nilaitiga']; ?></td>
          <td> <?php echo $d['nilaiujian']; ?></td>
          <td>
              <a href="edit_nilai.php?id=<?php echo $d['id']; ?>">Edit</a>
          </td>
      </tr>
         <?php } ?>
    </tbody>
    </table>

    </br>
    <a href="logout.php">LOGOUT</a>
    <a href="cetak_pesertaA.php" target="_blank">CETAK</a>
    <a href="unduh_pesertaA.php" >UNDUH</a>
  </body>
</html>