<?php


include "pripoj.php";

if(isset($_POST["odeslat"])){
    $kraj = $_POST["kraj"];
    $vzdelani = $_POST["vzdelani"];

    $dotaz = "SELECT jj_jmeno,jj_prijmeni FROM data WHERE jj_kraj='$kraj' AND jj_vzdelani='$vzdelani'";
    $vysledek = mysqli_query($spojeni,$dotaz);
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
    <a href="Home_Jakes.php"> <--Domu </a>
    <form method="post">
        Kraj:
        <select name="kraj">
            <option value="Pardubicky">Pardubicky</option>
            <option value="Olomoucky">Olomoucky</option>
            <option value="Liberecky">Libirecky</option>
        </select><br><br>
        Vzdelani:
        <select name="vzdelani">
            <option value="VS">VS</option>
            <option value="SS">SS</option>
            <option value="ZS">ZS</option>
        </select><br><br>
    <input type="submit" name="odeslat">

    </form><br><br>

    <table border="1">
        <tr>
            <th>Jmeno</th>
            <th>Prijmeni</th>
        </tr>
   

    <?php
        if(isset($_POST["odeslat"])){

            while($radek = mysqli_fetch_array($vysledek)){
                echo "<tr>
                        <td>$radek[jj_jmeno]</td>
                        <td>$radek[jj_prijmeni]</td>
                        </tr>
                ";
            }
        }



    ?>
     </table><br><br>
</body>
</html>
    
</body>
</html>