<link rel="stylesheet" href="../kuaspay/assets/css/style.css">

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="../pages/menu.php">
            <img src="../assets/img/kuas.jpg" alt="Logo" style="border-radius:50%; width:40px; height:40px; margin-right:10px;">
            <p class="mb-0 fw-bold">KUASPay</p>
        </a>
        
        <!-- Keranjang -->
        <div class="cart-container ms-3">
            <a class="nav-link" href="../pages/checkout.php" id="cart-button" style="background-color: var(--primary-blue); border-radius: 5px; padding: 8px 15px; color: white;">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-badge" id="cart-badge">0</span>
            </a>
        </div>

        <!-- Tombol Logout -->
        <a class="nav-link ms-3" href="#" id="logout-button" style="background-color: var(--danger-red); border-radius: 5px; padding: 8px 15px; color: white;">
            <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let cartCount = <?php echo isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0; ?>;
        document.getElementById("cart-badge").innerText = cartCount;
    });

    // Tombol Logout dengan SweetAlert2
    document.getElementById("logout-button").addEventListener("click", function(event) {
        event.preventDefault(); // Mencegah link langsung berpindah halaman

        Swal.fire({
            title: "Konfirmasi Logout",
            text: "Eluuww yakin mau keluar???",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            cancelButtonText: "skiipp",
            confirmButtonText: "gueh yakinn",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "../process/logout.php"; // Redirect ke logout
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>