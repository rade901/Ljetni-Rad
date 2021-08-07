<?php
    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['Ime']) || empty($_POST['prezime']) || empty($_POST['usluga']) || empty($_POST['kontakt']) || empty($_POST['email'])|| empty($_POST['adresa']) || empty($_POST['dolazak']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $Korisnik_Ime = $_POST['Ime'];
            $Korisnik_prezime = $_POST['prezime'];
            $Korisnik_usluga = $_POST['usluga'];
            $Korisnik_kontakt = $_POST['kontakt'];
            $Korisnik_email = $_POST['email'];
            $Korisnik_adresa = $_POST['adresa'];
            $Korisnik_dolazak = $_POST['dolazak'];

            $query = " insert into records (Korisnik_Ime, Korisnik_prezime, Korisnik_usluga, Korisnik_kontakt, Korisnik_email, Korisnik_adresa, Korisnik_dolazak) values('$Korisnik_Ime','$Korisnik_prezime','$Korisnik_usluga','$Korisnik_kontakt','$Korisnik_email','$Korisnik_adresa','$Korisnik_dolazak')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:View.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }
