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
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
        background-color: salmon;
        color: #fff;
        border: none;
        padding: 10px 20px;
        margin : 10px auto;
        cursor: pointer;
        text-decoration: none;
        position: absolute;
        top: 8px;
        right: 16px;
        font-size: 15px;
    }
    </style>
  </head>
  <body>
    <center><h1>Data Peserta Kursus</h1><center>
    <br/>
    <table border="1" style="width: 100%">
      <thead>
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Pin</th>
          <th>Kelas</th>
          <th>Alamat</th>
          <th>No. HP</th>
          <th>Instruktur</th>
        </tr>
    </thead>
    <tbody>
     <?php 
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($koneksi,"select * from peserta where nama like '%".$cari."%'");       
  }else{
    $data = mysqli_query($koneksi,"select * from peserta");   
  }
  $no = 1;
  while($d = mysqli_fetch_array($data)){
  ?>
       <tr>
          <td><?php echo $no++ ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $d['gambar']; ?>" style="width: 120px;"></td>
          <center>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['jeniskelamin']; ?></td>
          <td> <?php echo $d['pin']; ?></td>
          <td> <?php echo $d['kelas']; ?></td>
          <td> <?php echo $d['alamat']; ?></td>
          <td> <?php echo $d['nohp']; ?></td>
          <td> <?php echo $d['instruktur']; ?></td>
          </td>
      </tr>
         
      <?php
       
      }
      ?>
    </tbody>
  </table>
<script>
    window.print();
    </script>
  <a href="logout.php">LOGOUT</a>
  </body>
</html>