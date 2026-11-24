<?php
include = "connect_databaze.php";

$jmeno = htmlspecialchars($_POST['jmeno']);
$prijmeni = htmlspecialchars($_POST['prijmeni']);
$ulice = htmlspecialchars($_POST['ulice']);
$mesto = htmlspecialchars($_POST['mesto']);
$psc = htmlspecialchars($_POST['psc']);
$cp = htmlspecialchars($_POST['cp']);


$dotaz = "INSERT INTO osoby VALUES (NULL,'$jmeno','$prijmeni','$ulice','$mesto','$psc','$cp)"
$vysledek = mysql_query($condb,$dotaz);

if($vysledek){
    echo "funguje"
}else{
    echo "nefunguje"
}

mysqli_close($condb);
?>








?>