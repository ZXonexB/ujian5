<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digihaz.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <p>DIGIHAZ.COM</p>
            <nav>
                <ul>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#produk">Produk</a></li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li><a href="affiliate.php">Affiliate</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="auth-buttons">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="logout.php" class="btn btn-teal">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="btn btn-teal">Login</a>
                    <a href="signup.php" class="btn btn-purple">Sign up</a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <main>
        <section id="tentang" class="hero">
            <div class="container">
                <p class="welcome-text">Assalamu Alaikum Wr Wb, Selamat datang di web Digihaz.com</p>
                <h1>Apa itu Digihaz?</h1>
                <p class="hero-description">
                    Digihaz adalah Platform Digital Kreatif yang bergerak dalam bidang 
                    <strong>edukasi, konsultasi, dan pelatihan</strong> 
                    dalam bidang bisnis online untuk para pebisnis dan calon pebisnis online di Indonesia
                </p>
            </div>
        </section>

        <section id="produk" class="products">
            <div class="container">
                <h2>Product <span class="highlight">Terbaru</span></h2>
                <p class="section-description">Berikut Rekomendasi dari kami tentang Produk Terbaru yang bisa anda beli :</p>
                
                <div class="product-grid">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/3dcover-wsm-home-qx1c1c6xmvgoc9n84tm0k0ivitd27slrbqh32zuu2g.png" alt="Worksheet Mewarnai" width="320" height="240">
                            <span class="product-tag">MEWARNAI</span>
                        </div>
                        <div class="product-content">
                            <h3>Worksheet Mewarnai</h3>
                            <p>Kegiatan Mewarnai Bagi Anak Jadi Terasa Menyenangkan. Ada Program Affiliasinya Juga Lho</p>
                            <a href="#selengkapnya" class="btn btn-blue">Selengkapnya...</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/3dcover-wsc-home-qx1c1ab997e3p1pyfssrf0zyc1mbseeanh644fxmew.png" alt="Worksheet Calistung" width="320" height="240">
                            <span class="product-tag">CALISTUNG</span>
                        </div>
                        <div class="product-content">
                            <h3>Worksheet Calistung</h3>
                            <p>Cara Baru Belajar Calistung Disajikan seperti Layaknya Permainan, Fun Banget Deh!</p>
                            <a href="#selengkapnya" class="btn btn-blue">Selengkapnya...</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="image/3dcover-wsi-home-qx1c18fkvjbj1tsoqrzia1h159vld06tz7v55w0erc.png" alt="Worksheet Islami" width="320" height="240">
                            <span class="product-tag">ISLAMI</span>
                        </div>
                        <div class="product-content">
                            <h3>Worksheet Islami</h3>
                            <p>Solusi Cerdas Mengajarkan Nilai-Nilai Agama Islam Dengan Cara yang Menyenangkan!</p>
                            <a href="#selengkapnya" class="btn btn-blue">Selengkapnya...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <center>
        <section class="affiliate">
            <div class="container">
                <div class="posisi">
                    <h1>Login untuk akses affiliate program</h1>
                    <a href="login.php" class="btn btn-teal">Login</a>
                </div>
            </div>
        </section>
        </center>
    </main>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>

