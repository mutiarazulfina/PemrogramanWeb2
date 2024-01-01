<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum, arahkan kembali ke halaman login
    header("Location: Latihan5e.php");
    exit();
}

// Ambil username dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<style>
        body {
            background-color: #808080;
            color: black;
            text-align: center;
            padding: 50px;
        }

        .box{
            width: 520px;
            height: 70px;
            background-color: #D2E3C8;
            padding: 10px;
            margin: 10px auto;
        }

        .admin {
            width: 500px;
            height: 50px;
            background-color: #fff;
            margin : auto;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        a {
            background-color: #CD1818;
            color: white;
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
<body>
    <h2>Selamat Datang, Admin</h2>
    <div class="box">
        <div class="admin">
    <p>Ini adalah halaman admin.</p>
    <p><a href="Latihan5e.php">Logout</a></p>
</body>
</html>
