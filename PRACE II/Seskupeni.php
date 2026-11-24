<?php
include "pripoj.php";
ini_set('display_errors', 1);
error_reporting(E_ALL);


$odeslano = isset($_POST["odeslat"]);

if($odeslano){
    $sloupec =  $_POST["sloupec"];

    $dotaz = "SELECT $sloupec, COUNT(*) as pocet FROM data GROUP BY $sloupec ORDER BY $sloupec ASC";
    $vysledek = mysqli_query($spojeni, $dotaz);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Home_Jakes.php">⬅ Zpět na hlavní stránku</a><br><br>                                   

    <form method="post">
        <select name="sloupec">
            <option value="jj_kraj">Kraj</option>
            <option value="jj_vzdelani">Vzdělání</option>
            <option value="jj_pohlavi">Pohlaví</option>
            <option value="jj_status">Status</option>
            <option value="jj_obec">Obec</option>
            <option value="jj_prijmeni">Příjmení</option>
            <option value="jj_jmeno">Jméno</option>

        </select><br><br>
        <input type="submit" name="odeslat" value="Filtrovat">
    </form>
    <br><br><br>

    <?php
    if(!$odeslano){
        echo "<h2>Vyber sloupec</h2>";
    }else{
        echo "<table border='1'>
                <tr>
                    <th>$sloupec</th>
                    <th>Počet záznamů</th>
                </tr>";
    

    while($radek = mysqli_fetch_array($vysledek)){
        echo "<tr>
                <td>$radek[0]</td>
                <td>$radek[pocet]</td>
            </tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>