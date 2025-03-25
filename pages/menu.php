<?php 
include '../config/database.php';
?>

<!DOCTYPE html>
<html lang="id">
<?php include '../includes/head.php'; ?>
<link rel="stylesheet" href="../assets/css/style.css">
<body>
    <?php include '../includes/header.php'; ?>
    
    <div class="container text-center my-5">
        <h1 class="fw-bold">GATHERING KUAS 2025</h1>
    </div>
    
    <div class="container mb-5">
        <h2 class="section-title my-4">Makanan</h2>
        <div class="row g-2">
            <div class="col-6 col-sm-4 col-md-3 ">
                <div class="card h-100 shadow-sm">
                    <img src="../assets/img/kuas.jpg" class="card-img-top" alt="Mie Goreng">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Mie Goreng</h5>
                        <p class="card-text">Rp15.000</p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <div class="card h-100 shadow-sm">
                    <img src="../assets/img/kuas.jpg" class="card-img-top" alt="Nasi Goreng">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Nasi Goreng</h5>
                        <p class="card-text">Rp20.000</p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <div class="card h-100 shadow-sm">
                    <img src="../assets/img/kuas.jpg" class="card-img-top" alt="Sate Ayam">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Sate Ayam</h5>
                        <p class="card-text">Rp25.000</p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <div class="card h-100 shadow-sm">
                    <img src="../assets/img/kuas.jpg" class="card-img-top" alt="Gado-Gado">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Gado-Gado</h5>
                        <p class="card-text">Rp18.000</p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="section-title my-4">Minuman</h2>
        <div class="row g-4">
            <div class="col-6 col-sm-4 col-md-3">
                <div class="card h-100 shadow-sm">
                    <img src="../assets/img/kuas.jpg" class="card-img-top" alt="Es Teh Manis">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Es Teh Manis</h5>
                        <p class="card-text">Rp5.000</p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <div class="card h-100 shadow-sm">
                    <img src="../assets/img/kuas.jpg" class="card-img-top" alt="Kopi Susu">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Kopi Susu</h5>
                        <p class="card-text">Rp10.000</p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <div class="card h-100 shadow-sm">
                    <img src="../assets/img/kuas.jpg" class="card-img-top" alt="Jus Jeruk">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Jus Jeruk</h5>
                        <p class="card-text">Rp12.000</p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <div class="card h-100 shadow-sm">
                    <img src="../assets/img/kuas.jpg" class="card-img-top" alt="Jus Alpukat">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Jus Alpukat</h5>
                        <p class="card-text">Rp15.000</p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include '../includes/footer.php'; ?>
</body>
<?php include '../includes/keamanan.php'; ?>
</html>