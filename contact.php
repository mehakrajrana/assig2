<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">Farm Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart <span class="badge bg-secondary"><?= isset($_SESSION['p_counter']) ? $_SESSION['p_counter'] : "0"; ?></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container mt-4">
        <h1>Contact Us</h1>
        <p>Our grocery store is located in various cities:</p>
        <ul>
            <li>Mississauga</li>
            <li>Scarborough</li>
            <li>Brampton</li>
            <li>Caledon</li>
            <li>Burlington</li>
            <li>Oakville</li>
            <li>Kingston</li>
        </ul>
        <p>For online grocery, visit our website <a href="http://farmgrocery.ca" target="_blank">farmgrocery.ca</a>.</p>
        <p>You can contact us at: +1(437)-566-456 or farmgrocery1212@gmail.com</p>
    </div>

    
    <div class="footer mt-4">
        <div class="row">
            <div class="text-center">
                <p>Developed by Hamenjeet Kaur and Mehak Rajrana &copy; 2024</p>
            </div>
        </div>
    </div>

    
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
