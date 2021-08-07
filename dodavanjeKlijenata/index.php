<?php
$conn = mysqli_connect("Localhost", "root", "", "crud");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="stylesheet" href="../assets/css/foundation.css" />
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>Prijava</title>
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
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
        <li><a href="../dodavanjeKlijenata\index.php">admin</a></li>
        <li><a href="./users.php">Postojeci klijenti</a></li>
        <a href="#">Dobrodošli</a>
        <p></p><a class="odjava" href="../odjava.php">Odjavi me </a>
      </ul>
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
      <h5>Unos klijenta</h5>
        <form action="insert.php" method="post">
        <input type="text" class="form-control mb-2" placeholder="Korisnik Ime" name="Ime" required><br>
        <input type="text" class="form-control mb-2" placeholder="Korisnik Prezime" name="prezime" required><br>
        <input type="text" class="form-control mb-2" placeholder="Korisnik Usluga" name="usluga" required><br>
        <input type="number" class="form-control mb-2" placeholder="Korisnik Kontakt" name="kontakt" required><br>
        <input type="email" class="form-control mb-2" placeholder="Email" name="email" required><br>
        <input type="text" class="form-control mb-2" placeholder="Adresa" name="adresa" required><br>
        <input type="date" class="form-control mb-2" placeholder=" Korisnik Dolazak " name="dolazak" required><br>
        <button class="alert button" name="submit">Spremi</button>
        <a href="../admin.php" class="alert button">Odustani</a>
      </form>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <!--fondation js-->
  <script src="../assets/js/vendor.js"></script>
  <script src="../assets/js/foundation.js"></script>
  <script src="../assets/js/foundation.js.map"></script>
  <script>
    $(document).foundation();
  </script>
</body>

</html>