<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiliate - Digihaz.com</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(to bottom right, #e6f7ff, #e6fff2);
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 40px;
            width: auto;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 1.5rem;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
        }
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn-teal {
            background-color: #20c997;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.9;
        }
        .affiliate-content {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <p>DIGIHAZ.COM</p>
            <nav>
                <ul>
                    <li><a href="index.php#tentang">Tentang</a></li>
                    <li><a href="index.php#produk">Produk</a></li>
                    <li><a href="affiliate.php">Affiliate</a></li>
                </ul>
            </nav>
            <div class="auth-buttons">
                <a href="logout.php" class="btn btn-teal">Logout</a>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="affiliate-content">
                <h1>Welcome to the Affiliate Program</h1>
                <p>Silakan order salah satu produk berbayar kami sebagai syarat menjadi member affiliate. Kami menyediakan program affiliate dengan tawaran komisi menarik.</p>
            </div>
        </div>
    </main>
</body>
</html>

