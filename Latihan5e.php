<?php
session_start();

// Data username dan password yang benar (misalnya)
$correct_username = 'Huda';
$correct_password = '2004';

// Cek apakah form telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang di-input dari form
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Periksa apakah data yang dimasukkan cocok dengan yang benar
    if ($input_username === $correct_username && $input_password === $correct_password) {
        // Data benar, arahkan ke halaman admin
        $_SESSION['username'] = $input_username; // Simpan username di session jika perlu di halaman admin
        header("Location: admin.php"); // Ganti admin.php dengan halaman admin yang sesuai
        exit();
    } else {
        // Data tidak cocok, tampilkan pesan kesalahan
        $error_message = "Username atau password salah!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <style>
        body {
            background-color: #808080;
            text-align: center;
            padding: 10px;
        }

        form {
            width: 400px;
            margin: auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }
        input {
            padding: 8px;
            margin-bottom: 20px;
            
        }
        input[type="submit"] {
            background-color: #3A1078;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin: auto;
        }

        p {
            color: red;
        }
    </style>
    <h2>Login</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username&ensp;</label>
        <input type="text" id="username" name="username"required><br>

        <label for="password">Password&ensp;</label>
        <input type="password" id="password" name="password"required><br>

         <?php if(isset($error_message)) { ?>
        <p class><?php echo $error_message; ?></p>
        <?php } ?>

        <input type="submit" value="Login">
    </form>
</body>
</html>