<?php
//DB connection//
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
    <?php
    $conn = mysqli_connect("Localhost", "root", "", "crud");
    $result =mysqli_query($conn, "SELECT COUNT(*) AS count FROM records");
    $row = mysqli_fetch_array($result);
    $count = $row['count'];
    ?>
  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">Auto servis</li>
        <a href="../index.php">Pocetna</a>
        <li class="has-submenu">
          <a href="#0">Opcije</a>
          <ul class="submenu menu vertical" data-submenu>
          <li><a href="../dodavanjeKlijenata\index.php">Dodaj klijenta</a></li>
          <li><a href="./users.php">Postojeci klijenti</a></li>
          </ul>
        </li>
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
  <div class="grid-x grid-margin-x small-up-2 medium-up-3">
    <div class="cell">
      <div class="card">
        <div class="card-section">
        <h4>Ukupan broj klijenata</h4>
          <p><?php echo $row['count']; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
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