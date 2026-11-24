<?php
$server = "localhost";
$user = "root";
$passwd = "";
$datab = "jakes";

$condb = mysqli_connect($server, $user, $passwd,$datab); //proceduralne 
// $condb = new mysqli($server, $user, $passwd,$datab); objektove
if(!$condb){die("chyba pripojeni ( ". mysqli_connect_errno()."):" . mysqli_connect_errno());}

mysqli_set_charset($condb, "utf8");

















?>