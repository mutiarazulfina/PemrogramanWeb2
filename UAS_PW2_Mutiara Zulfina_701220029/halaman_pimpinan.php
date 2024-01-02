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
      width: 70%;
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
    Kursus D'LANGUAGE</h1><center>
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
      <thead>
        <tr>
          <th><center><a href="daftar_pesertaP.php">Peserta</th><center>
          <th><center><a href="daftar_instrukturP.php">Instruktur</th><center>
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
         <?php } ?>
    </tbody>
    </table>

    </br>
    <a href="logout.php">LOGOUT</a>
  </body>
</html>