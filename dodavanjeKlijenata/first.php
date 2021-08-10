<?php require_once '../konfiguracija.php';
//štićenje
sticenjeStranice($putanjaAplikacije);
?>
<!--connection------------------------------------------------------------------------>
<?php
require_once("connection.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/foundation.css" />
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>Početna stranica</title>
  <script src="../include/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="../assets/favicon/site.webmanifest">
</head>

<body>
  <!--sweet alert------------------------------------------------------------------------>
  <script>
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Dobro došao na početnu stranicu',
      showConfirmButton: false,
      timer: 2000
    })
  </script>
  <!--sweet alert------------------------------------------------------------------------>
  <?php
  $conn = mysqli_connect("Localhost", "root", "", "crud");
  $result = mysqli_query($conn, "SELECT COUNT(*) AS count FROM records");
  $row = mysqli_fetch_array($result);
  $count = $row['count'];
  ?>
  <!--Nav bar------------------------------------------------------------------------>
  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">Auto servis</li>
        <a href="./first.php">Pocetna</a>
        <li class="has-submenu">
          <a href="#0">Opcije</a>
          <ul class="submenu menu vertical" data-submenu>
            <li><a href="../dodavanjeKlijenata\index.php">Dodaj klijenta</a></li>
            <li><a href="./View.php">Postojeci klijenti</a></li>
          </ul>
        </li>
        <a href="../era.php">ERA-diagram</a>
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
  <!--Nav bar------------------------------------------------------------------------>
  <!--Background------------------------------------------------------------------------>
  <h4><?php echo  $_SESSION['autoriziran'] ?></h4>
  <div class="grid-container">
    <div class="grid-x grid-margin-x small-up-2 medium-up-3">
      <div class="cell">
        <div class="card">
          <div class="card-section">
            <h4>Ukupan broj klijenata</h4>
            <p id="brojac"><?php echo $row['count']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Background------------------------------------------------------------------------>
  <?php include '../include/admin/script.php';?>
</body>

</html>