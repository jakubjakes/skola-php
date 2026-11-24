<?php
include "pripoj.php";
$jmeno ="";
$prijmeni ="";

if(isset($_POST["odeslat"])){
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];
}


?>


<!DOCTYPE html>
<html lang="en">1
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Home_Jakes.php">⬅ Zpět na hlavní stránku</a><br><br>
    <h1>Hledani podle jmena a prijmeni</h1><br><br>

    <form method="post">
        jmeno:<input type="text" name="jmeno" ><br>
        prijemni:<input type="text" name="prijmeni"><br>
        <input type="submit" name="odeslat" value="Odeslat">
    </form>
    <br>

    <table border="1">
        <tr>
            <th>Příjmení</th>
            <th>Jmeno</th>
            <th>obec</th>
            <th>kraj</th>
        </tr>
        <?php
        $dotaz = "SELECT * FROM data WHERE jj_jmeno = '$jmeno' AND jj_prijmeni = '$prijmeni'";
        $vysledek = mysqli_query($spojeni, $dotaz);

        while($radek = mysqli_fetch_array($vysledek)){
            echo "<tr>
                    <td>$radek[jj_prijmeni]</td>
                    <td>$radek[jj_jmeno]</td>
                    <td>$radek[jj_obec]</td>
                    <td>$radek[jj_kraj]</td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>