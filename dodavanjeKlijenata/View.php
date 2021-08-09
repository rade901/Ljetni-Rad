<?php require_once '../konfiguracija.php'; 
//štićenje
sticenjeStranice($putanjaAplikacije);
?>
<?php
$conn = mysqli_connect("Localhost","root","","crud");

?>
<?php 
    require_once("connection.php");
    $query = " select * from records ";
    $result = mysqli_query($con,$query);

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>
<body>

<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Auto servis</li>
      <a href="./first.php">Početna</a>
      <li class="has-submenu">
        <a href="#0">Usluge</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#0">Punjenje klima</a></li>
          <li><a href="#0">Mehanika</a></li>
          <li><a href="#0">Autoelektrika/Diagnostika</a></li>
        </ul>
        <li><a href="../dodavanjeKlijenata\index.php">admin</a></li>
      </li>
      <a href="#">Dobrodošli</a><p></p><a class="odjava" href="../odjava.php">Odjavi me </a></ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>
<?php echo $_SESSION['autoriziran'] ?>
<div class="grid-container">
        <div class="callout pocetna">
            <a href="./insert.php" class="button">Dodaj novi</a>
            <div class="table-scroll">
            <table class="hover">
                            <tr>
                            <td>ID</td>
                                <td> Ime </td>
                                <td> Prezime </td>
                                <td> Usluga </td>
                                <td> Kontakt  </td>
                                <td> Email </td>
                                <td> Adresa stanovanja </td>
                                <td> Datum dolaska</td>
                                <td> Izmjena </td>
                                <td> brisanje </td>
                            </tr>

                            <?php 
                                    
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
                            ?>
                                    <tr>
                                    <td><?php echo $Korisnik_ID ?></td>
                                        <td><?php echo $Korisnik_Ime ?></td>
                                        <td><?php echo $Korisnik_prezime ?></td>
                                        <td><?php echo $Korisnik_usluga ?></td>
                                        <td><?php echo $Korisnik_kontakt ?></td>
                                        <td><?php echo $Korisnik_email ?></td>
                                        <td><?php echo $Korisnik_adresa ?></td>
                                        <td><?php echo $Korisnik_dolazak ?></td>
                                        <td><a class="button warning" href="edit.php?ID=<?php echo $Korisnik_ID ?>">Edit</a></td>
                                        <td><a class="button alert" href="delete.php?Del=<?php echo $Korisnik_ID ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>


<!--fondation js-->
<script src="../assets\js\vendor.js"></script>
    <script src="../assets\js\foundation.js.map"></script>
    <script src="../assets\js\foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>