<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Shopping list</div>
        <ul class="nav-links" id="nav-links">
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=dashboard">Dashboard</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Add Item</a></li>
            <li><a href="signup.php">Logout</a></li>
        </ul>
        <div class="burger" id="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!-- PHP Switch Case for Page Handling -->
    <div class="content">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include 'home.php';
                    break;
                case 'dashboard':
                    include 'dashboard.php';
                    break;
                default:
                    echo "<h1>Page Not Found</h1>";
                    break;
            }
        } else {
            include 'home.php'; // Default Page
        }
        ?>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const burger = document.getElementById("burger");
            const navLinks = document.getElementById("nav-links");

            burger.addEventListener("click", () => {
                navLinks.classList.toggle("show");
            });
        });
    </script>
</body>
</html>
