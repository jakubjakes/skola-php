<?php
$server = "localhost";
$user = "root";
$passwd = "";
$datab = "jakes";

$condb = mysqli_connect($server, $user, $passwd,$datab); //proceduralne 
// $condb = new mysqli($server, $user, $passwd,$datab); objektove
if(!$condb){die("chyba pripojeni ( ". mysqli_connect_errno()."):" . mysqli_connect_errno());}

mysqli_set_charset($condb, "utf8");
//$condb -> set_charset("utf8");

$dotaz = "INSERT INTO knihy VALUES (20,'Nova Kniha','Karel','Moravec',123,654,'2026-02-16')";
$vysledek = mysqli_query($condb, $dotaz);
echo "$vysledek<br>";

$pocet_radku = mysqli_num_rows($vysledek);
echo"pocet nalezenych zaznamu $pocet_radku<br>";

echo"<table border='1'>";
while($radek = mysqli_fetch_array($vysledek)){
    echo"<tr>
    <td>$radek[0]</td>
    <td>$radek[1]</td>
    <td>$radek[2]</td>
    <td>$radek[3]</td>
    <td>$radek[4]</td>
    <td>$radek[Cena]</td>
    <td>$radek[6]</td>
    </tr>";

}

echo"</table>";


mysqli_close($condb); // odpojeni proceduralne
//$condb->close(); // odpojeni objektove

?>