<?php require_once '../konfiguracija.php';
//štićenje
sticenjeStranice($putanjaAplikacije);
?>
<?php 
    require_once("connection.php");
    $Korisnik_ID = $_GET['ID'];
    $query = " select * from records where Korisnik_ID='".$Korisnik_ID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Korisnik_ID = $row['Korisnik_ID'];
        $Korisnik_Ime = $row['Korisnik_Ime'];
        $Korisnik_prezime = $row['Korisnik_prezime'];
        $Korisnik_usluga = $row['Korisnik_usluga'];
        $Korisnik_kontakt = $row['Korisnik_kontakt'];
        $Korisnik_email = $row['Korisnik_email'];
        $Korisnik_adresa = $row['Korisnik_adresa'];
        $Korisnik_dolazak = $row['Korisnik_dolazak'];
    }

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
      <li><a href="#0">Klijent</a></li>
      <li><a href="../admin.php">admin</a></li>
      <a href="#">Dobrodošli</a><p></p><a class="odjava" href="../odjava.php">Odjavi me </a></ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>
<h4><?php echo  $_SESSION['autoriziran'] ?></h4>
<div class="grid-container">
        <div class="callout pocetna">
        <a href="../admin.php" class="alert button">Odustani</a>

                            <form action="update.php?ID=<?php echo $Korisnik_ID ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder="Korisnik Ime" name="Ime" value="<?php echo $Korisnik_Ime ?>">
                                <input type="text" class="form-control mb-2" placeholder="Korisnik Prezime " name="prezime" value="<?php echo $Korisnik_prezime ?>">
                                <input type="text" class="form-control mb-2" placeholder="Korisnik Usluga" name="usluga" value="<?php echo $Korisnik_usluga ?>">
                                <input type="number" class="form-control mb-2" placeholder="Korisnik_kontakt" name="kontakt" value="<?php echo $Korisnik_kontakt ?>">
                                <input type="email" class="form-control mb-2" placeholder="Korisnik Email" name="email" value="<?php echo $Korisnik_email ?>">
                                <input type="text" class="form-control mb-2" placeholder="Korisnik Adresa" name="adresa" value="<?php echo $Korisnik_adresa ?>">
                                <input type="date" class="form-control mb-2" placeholder="Korisnik Dolazak" name="dolazak" value="<?php echo $Korisnik_dolazak ?>">
                                <button class="button" name="update">Update</button>
                                <td><a href="delete.php?Del=<?php echo $Korisnik_ID ?>">Delete</a></td>
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