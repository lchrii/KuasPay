<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Jualan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-red: #dc3545;
            --primary-orange: #fd7e14;
            --primary-blue: #007bff;
            --primary-green: #28a745;
            --primary-yellow: #ffc107;
        }
        .navbar {
            background-color: var(--primary-blue);
        }
        .navbar-brand img {
            height: 50px;
        }
        .nav-link {
            color: white !important;
        }
        .nav-link:hover {
            color: var(--primary-orange) !important;
        }
        .cart-container {
            position: relative;
        }
        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--primary-red);
            color: white;
            border-radius: 50%;
            font-size: 12px;
            padding: 3px 7px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="logo.png" alt="Logo">
            </a>
            <div class="d-flex ms-auto">
                <div class="cart-container">
                    <a class="nav-link" href="../pages/checkout.php" id="cart-button" style="background-color: var(--primary-blue); border-radius: 5px; padding: 8px 15px;">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-badge" id="cart-badge">0</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let cartCount = <?php echo isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0; ?>;
            document.getElementById("cart-badge").innerText = cartCount;
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
