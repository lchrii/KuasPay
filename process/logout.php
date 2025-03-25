<?php
session_start(); // Mulai sesi
session_unset(); // Hapus semua variabel sesi
session_destroy(); // Hancurkan sesi
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <script>
        // Hapus username dari localStorage
        localStorage.removeItem('username');

        // Redirect ke halaman login setelah logout
        window.location.href = "../index.php";
    </script>
</head>
<body>
</body>
</html>
