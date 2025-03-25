<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <script>
        // Ambil username dari LocalStorage
        let username = localStorage.getItem('username');

        if (username) {
            Swal.fire({
                icon: 'success',
                title: 'Eluuww Sukses masuk brooww',
                text: `Haii brookk, ${username}! Selamat menghabiskan duit anda.`,
                timer: 2000, // 2 detik sebelum pindah ke menu.php
                showConfirmButton: false
            }).then(() => {
                window.location.href = '../kuaspay/pages/menu.php'; // Redirect ke halaman menu setelah alert
            });
        } else {
            // Jika username tidak ditemukan, kembali ke halaman login
            window.location.href = '../index.php';
        }
    </script>
</body>

</html>
