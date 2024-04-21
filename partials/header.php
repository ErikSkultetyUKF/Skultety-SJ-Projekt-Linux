<?php
  require_once('./_inc/config.php');
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Základné informácie o Linuxe">
    <meta name="keywords" content="Linux">
    <meta name="author" content="Erik Škultéty">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./assets/img/misc/tux.svg">
    <title>Linux</title>
</head>
<body>

<!-- Header -->
<header>
    <nav class="navbar">
        <!-- Logo PC -->
        <img id="tux-nav" src="./assets/img/misc/tux.svg" alt="ikona-maskot-linuxu">
        <!-- Hamburger pre mobil -->
        <div class="dropdown">
            <button class="dropbtn">
            <img src="./assets/img/misc/menu.png" alt="ikona-hamburger-menu">
            </button>
            <div class="dropdown-content">
                <a href="index.php">Domov</a>
                <a href="linux.php">O Linuxe</a>
                <a href="distributions.php">Distribúcie</a>
                <a href="community.php">Komunita</a>
                <a href="contact.php">Kontakt</a>
                <!-- Logo Mobil -->
                <img id="tux-nav-mobile" src="./assets/img/misc/tux.svg" alt="ikona-maskot-linuxu">
            </div>
        </div>
        <!-- Podstránky sa otvárajú v aktuálnej karte -->
        <a href="index.php">Domov</a>
        <a href="linux.php">O Linuxe</a>
        <a href="distributions.php">Distribúcie</a>
        <a href="community.php">Komunita</a>
        <a href="contact.php">Kontakt</a>
    </nav>
</header>