<?php

require_once 'konfiguracija.php';

//logiranje($_POST);
//logiranje($korisnici);

$postoji=false;
foreach($korisnici as $eposta=>$sifra){
    if($eposta===$_POST['eposta'] && $sifra===$_POST['sifra']){
        $postoji=true;
        break;
    }
}

if($postoji){
    $_SESSION['korisnik']=$_POST['eposta'];
    

 


    header('location:' . $putanjaAplikacije . 'klijent\klijent.php');
}else{
    header('location:' . $putanjaAplikacije . 'index.php');
}