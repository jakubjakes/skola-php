<?php
include "pripoj.php";
ini_set('display_errors', 1);
error_reporting(E_ALL);

// OPRAVA 2: Nastavíme hodnoty, které v databázi fakt existují
$kraj = "Praha";
$vzdelani = "VŠ";

if(isset($_POST["odeslat"])){
    $kraj = $_POST["kraj"];
    $vzdelani = $_POST["vzdelani"];
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Zobrazení dat - Jakub Jakeš</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="Home_Jakes.php">⬅ Zpět na hlavní stránku</a><br><br>
    
    <form method="POST">
        <select name="kraj">
            <option value="Praha">Praha</option>
            <option value="Středočeský kraj">Středočeský kraj</option>
            <option value="Jihočeský kraj">Jihočeský kraj</option>
            <option value="Plzeňský kraj">Plzeňský kraj</option>
            <option value="Karlovarský kraj">Karlovarský kraj</option>
            <option value="Ústecký kraj">Ústecký kraj</option>
            <option value="Liberecký kraj">Liberecký kraj</option>
            <option value="Královéhradecký kraj">Královéhradecký kraj</option>
            <option value="Pardubický kraj">Pardubický kraj</option>
            <option value="Vysočina">Vysočina</option>
            <option value="Jihomoravský kraj">Jihomoravský kraj</option>
            <option value="Olomoucký kraj">Olomoucký kraj</option>
            <option value="Zlínský kraj">Zlínský kraj</option>
            <option value="Moravskoslezský kraj">Moravskoslezský kraj</option>
        </select>

        <select name="vzdelani">
            <option value="VŠ">VŠ</option>
            <option value="ZŠ">ZŠ</option>
            <option value="SŠ">SŠ</option>
        </select>

        <input type="submit" name="odeslat" value="Filtrovat">
    </form>

    <br>

    <table border="1">
        <tr>
            <th>Příjmení</th>
            <th>Jméno</th>
            <th>Pohlaví</th>
            <th>Status</th>
            <th>Vzdělání</th>
            <th>Obec</th>
            <th>Kraj</th>
        </tr>
    
        <?php
        $dotaz = "SELECT * FROM data WHERE jj_kraj = '$kraj' AND jj_vzdelani = '$vzdelani'";
        $vysledek = mysqli_query($spojeni, $dotaz);

        // Kontrola, jestli to vůbec něco našlo
        if(mysqli_num_rows($vysledek) == 0) {
            echo "<tr><td colspan='7'>Pro výběr $kraj a $vzdelani nebyl nikdo nalezen.</td></tr>";
        }

        while ($radek = mysqli_fetch_array($vysledek)) {
            echo "<tr>
                    <td>$radek[jj_prijmeni]</td>
                    <td>$radek[jj_jmeno]</td>
                    <td>$radek[jj_pohlavi]</td>
                    <td>$radek[jj_status]</td>
                    <td>$radek[jj_vzdelani]</td>
                    <td>$radek[jj_obec]</td>
                    <td>$radek[jj_kraj]</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>