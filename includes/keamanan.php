<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Periksa apakah username ada di localStorage
    let username = localStorage.getItem('username');
    if (!username) {
        // Tampilkan notifikasi dengan durasi otomatis
        Swal.fire({
            title: "Akses Ditolak!",
            html: "<b>Isi dulu nama mu boszz...</b>",
            icon: "warning",
            timer:2000, // Durasi 2 detik
            showConfirmButton: false
        });

        // Alihkan ke halaman index.php setelah 2 detik
        setTimeout(() => {
            window.location.href = "../index.php";
        }, 2000);
    }
</script>
