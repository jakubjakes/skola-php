<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>zobrazeni dat</h1>
    <?php
    include = "connect_databaze.php";

    echo "<a href='zobraz.php?razeni=desc'>Seradi podle prijmeni vzestupne</a><br";
    echo "<a href='zobraz.php?razeni=asc'>Seradi podle prijmeni sestupne</a><br";
    if(!isset($_GET['razeni'])){
        echo "vyber zpusob"
    }else{

$razeni = $_GET['razeni'];
$dotaz = "SELECT * FROM osoby ORDER BY prijmeni $razeni;";
$vysledek = mysqli_query($condb, $dotaz);


echo"<table border='1'>";
echo "<tr>";
echo"<td>ID</td>";
echo"<td>Jméno</td>";
echo"<td>Příjmení</td>";
echo"<td>Ulice</td>";
echo"<td>Město</td>";
echo"<td>ulice</td>";
echo"<td>cp</td>";
echo"<td>psc</td>";
echo"</tr>";


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
    }

    
    
    
    ?>
</body>
</html>