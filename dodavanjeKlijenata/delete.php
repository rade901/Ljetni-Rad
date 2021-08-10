<?php
require_once("connection.php");

if(isset($_GET['Del']))
{
    $Korisnik_ID = $_GET['Del'];
    $query = " delete from records where Korisnik_ID = '".$Korisnik_ID."'";
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