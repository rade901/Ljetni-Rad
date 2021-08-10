<!--connection------------------------------------------------------------------------>
<?php 
    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $Korisnik_ID = $_GET['ID'];
        $Korisnik_Ime = $_POST['Ime'];
        $Korisnik_prezime = $_POST['prezime'];
        $Korisnik_usluga = $_POST['usluga'];
        $Korisnik_kontakt = $_POST['kontakt'];
        $Korisnik_email = $_POST['email'];
        $Korisnik_adresa = $_POST['adresa'];
        $Korisnik_dolazak = $_POST['dolazak'];

        $query = " update records set Korisnik_Ime = '".$Korisnik_Ime."',Korisnik_prezime = '".$Korisnik_prezime."',Korisnik_usluga='".$Korisnik_usluga."',Korisnik_kontakt='".$Korisnik_kontakt."',Korisnik_email='".$Korisnik_email."',Korisnik_adresa='".$Korisnik_adresa."',Korisnik_dolazak='".$Korisnik_dolazak."' where Korisnik_ID='".$Korisnik_ID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:View.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:View.php");
    }


?>