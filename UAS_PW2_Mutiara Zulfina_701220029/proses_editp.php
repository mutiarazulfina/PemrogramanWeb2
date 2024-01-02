<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id           = $_POST['id'];
  $nama         = $_POST['nama'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $pin          = $_POST['pin'];
  $kelas        = $_POST['kelas'];
  $alamat       = $_POST['alamat'];
  $nohp         = $_POST['nohp'];
  $instruktur        = $_POST['instruktur'];
  $gambar       = $_FILES['gambar'] ['name'];
  //cek dulu jika merubah gambar peserta jalankan coding ini
  if($gambar != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_peserta); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang pesertanya kita edit
                   $query  = "UPDATE peserta SET nama = '$nama', jeniskelamin = '$jeniskelamin', pin = '$pin', kelas = '$kelas', alamat = 'alamat', nohp = 'nohp', instruktur = 'instruktur', gambar = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='halaman_admin.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_peserta.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang pesertanya kita edit
      $query  = "UPDATE peserta SET nama = '$nama', jeniskelamin = '$jeniskelamin', pin = '$pin', kelas = '$kelas', alamat = 'alamat', nohp = 'nohp', instruktur = 'instruktur'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='halaman_admin.php';</script>";
      }
    }

