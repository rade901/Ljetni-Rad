<?php

require_once 'konfiguracija.php';

//logiranje($_POST);
//logiranje($korisnici);

$postoji=false;
foreach($korisnici as $email=>$lozinka){
    if($email===$_POST['email'] && $lozinka===$_POST['lozinka']){
        $postoji=true;
        break;
    }
}

if($postoji){
    $_SESSION['autoriziran']=$_POST['email'];

 

    header('location:' . $putanjaAplikacije . './dodavanjeKlijenata/index.php');
}else{
    header('location:' . $putanjaAplikacije . 'index.php');
}