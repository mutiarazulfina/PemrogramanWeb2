<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Kursus D'Language</title>
    <link href="logo.png" rel="shortcut icon">
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: lightcyan;
      }
    button {
          background-color: lightcyan;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Instruktur</h1>
      <center>
      <form method="POST" action="proses_tambahi.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Foto</label>
          <input type="file" name="gambar" required="" />
        </div>
        <label>Nama</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>Jenis Kelamin</label>
         <input type="text" name="jeniskelamin" />
        </div>
        <div>
          <label>TTL</label>
         <input type="text" name="ttl" required="" />
        </div>
        <div>
          <label>Kelas</label>
         <input type="text" name="kelas" required="" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" required="" />
        </div>
        <div>
          <label>No. HP</label>
         <input type="text" name="nohp" required="" />
        </div>
        <div>
          <label>Email</label>
         <input type="text" name="email" required="" />
        </div>
        <div>
         <button type="submit">Simpan Instruktur</button>
        </div>
        </section>
      </form>
  </body>
</html>