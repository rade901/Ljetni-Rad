<?php require_once 'konfiguracija.php'; 
if(isset($_SESSION['korisnik'])){
    header('location:' . $putanjaAplikacije . 'klijent\klijent.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
<meta charset="UTF-8">
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
      <a href="../index.php">Početna</a>
      <li class="has-submenu">
        <a href="#0">Usluge</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#0">Punjenje klima</a></li>
          <li><a href="#0">Mehanika</a></li>
          <li><a href="#0">Autoelektrika/Diagnostika</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<section class="signup-form">
<form action="<?php echo $putanjaAplikacije; ?>klijent\autorizacija.php" method="post">

    <div class="field2">
      <label>Šifra</label>
      <input type="password" name="sifra" id="lozinka">
    </div>

    <div class="field3">
        <h3>Prijava</h3>
      <label>Email</label>
      <input type="email" name="eposta" id="email">
    </div>

    <div class="btn">
      <input name="btn" type="submit" class="button radius success" value="Prijavi se">
      <p>sifre</p>
      <p>plavi@osijek.hr=o2</p>
      <p>admin@edunova.hr=a2</p>
    </div>
</form>
</section>
<!--fondation js-->
<script src="../assets/js/vendor.js"></script>
    <script src="../assets/js/foundation.js"></script>
    <script src="../assets/js/foundation.js.map"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>
