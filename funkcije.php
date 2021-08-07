<?php

function logiranje($varijabla)
{
    if(gettype($varijabla)!=='array'){
        echo gettype($varijabla), '<br />';
    }
    echo '<pre>';
    print_r($varijabla);
    echo '</pre>';
    echo '<hr />';
}

function sticenjeStranice($putanjaAplikacije)
{
    if(!isset($_SESSION['autoriziran'])){
        header('location:' . $putanjaAplikacije . 'index.php');
        exit;
    }
}