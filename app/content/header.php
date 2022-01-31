<?php 
    require 'app/includes/functions.php'; 
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyNetWork</title>
    <link rel="icon" type="image/x-icon" href="app/images/favicon.png">
    <!-- FONTAWESOME LINK -->
    <script src="https://kit.fontawesome.com/ac24459024.js" crossorigin="anonymous"></script>
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
     <!-- TINY SLIDER LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="stylesheet" href="app/css/style.css">
    <link rel="stylesheet" href="app/css/normalize.css">
</head>
<body>
    <!-- TOP HEADER -->
    <header class="top-header">
        <div class="container flex-container">
            <div class="logo">
            <a href="index.php"><p>My<span>NetWork</span></p></a>
            </div>
            <div class="social">
                <a href="#"><i class="fas fa-rss"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </header>
    <!-- MAIN NAVIGACIJA -->
    <nav class="main-nav">
        <div class="container flex-container">
            <div class="menu">
                <ul>
                    <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Titulinis</a></li>
                    <li class="<?= ($activePage == 'apie') ? 'active':''; ?>"><a href="apie.php">Apie mus</a></li>
                    <li class="<?= ($activePage == 'rma') ? 'active':''; ?>"><a href="rma.php">RMA</a></li>
                    <li class="<?= ($activePage == 'kontaktai') ? 'active':''; ?>"><a href="kontaktai.php">Kontaktai</a></li>
                </ul>
            </div>          
            <a href="javascript:void(0);" class="icon" onclick="mobileMenu()"><i class="fa fa-bars"></i></a>
            <div class="call">
                <a href="tel:+37064104618">+370 641 04618</a>
            </div>
        </div>
        <!-- MOBILE NAVIGACIJA -->
        <div class="mobile-nav">
            <ul id="mMenu" class="mob flex-container">
                <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Titulinis</a></li>
                <li class="<?= ($activePage == 'apie') ? 'active':''; ?>"><a href="apie.php">Apie mus</a></li>
                <li class="<?= ($activePage == 'rma') ? 'active':''; ?>"><a href="rma.php">RMA</a></li>
                <li class="<?= ($activePage == 'kontaktai') ? 'active':''; ?>"><a href="kontaktai.php">Kontaktai</a></li>
            </ul>
        </div>
    </nav>   
   