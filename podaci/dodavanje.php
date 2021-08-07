<?php require_once '../konfiguracija.php'; 
sticenjeStranice($putanjaAplikacije);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
     <link rel="stylesheet" href="../assets\css\foundation.css" />
     <link rel="stylesheet" href="../assets/css/style.css">
    <title>Auto servis</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    
</head>
<body>
<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Auto servis</li>
      <a href="../index.php">Pocetna</a>
      <li class="has-submenu">
        <a href="#0">Usluge</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#0">Punjenje klima</a></li>
          <li><a href="#0">Mehanika</a></li>
          <li><a href="#0">Autoelektrika/Diagnostika</a></li>
        </ul>
      </li>
      <li><a href="#0">Klijent</a></li>
      <li><a href="../privatno/nadzornaploca.php">admin</a></li>
      <a href="#">Dobrodošli</a><p></p><a class="odjava" href="../odjava.php">Odjavi me </a></ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>
<div class="grid-container">
        <div class="callout pocetna">
        <a href="../admin.php" class="alert button">Odustani</a>
        <form action="./admin.php" method="post">
                <label for="ime">Ime</label>
                <input type="text" name="ime" id="ime">
                <label for="prezime">Prezime</label>
                <input type="text" name="prezime" id="prezime">
                <label for="vozilo">vozilo</label>
                <input type="text" name="vozilo" id="vozilo">
                <label for="brs">Broj šasije</label>
                <input type="number" name="brs" id="brs">
                <label for="telefon">Telefon</label>
                <input type="number" name="telefon" id="telefon">
                <label for="adresa">adresa</label>
                <input type="text" name="adresa" id="adresa">
                <input type="submit" value="Dodaj novog klijenta">
            </form>
        </div>

<!--fondation js-->
<script src="../assets\js\vendor.js"></script>
    <script src="../assets\js\foundation.js.map"></script>
    <script src="../assets\js\foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>