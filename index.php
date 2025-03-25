<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Tanpa Password</title>
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--  -->
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 300px;">
        <h4 class="text-center">Login</h4>
        <form onsubmit="login(event)">  <!-- Panggil login() di form -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" class="form-control" placeholder="Masukkan nama" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Masuk</button> 
        </form>
    </div>

    <script>
    function login(event) {
        event.preventDefault(); // Mencegah reload form

        let nama = document.getElementById('nama').value.trim();
        if (nama === "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else {
            localStorage.setItem('username', nama); // Simpan username ke LocalStorage
            window.location.href = 'notifikasi.php'; // Redirect ke notifikasi.php
        }
    }
</script>

</body>


</html>