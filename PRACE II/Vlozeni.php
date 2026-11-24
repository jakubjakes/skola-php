<?php
include "pripoj.php";
ini_set('display_errors', 1);
    error_reporting(E_ALL);

if(isset($_POST["odeslat"])){
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];
    $pohlavi = $_POST["pohlavi"];
    $status = $_POST["status"];
    $vzdelani = $_POST["vzdelani"];
    $obec = $_POST["obec"];
    $kraj = $_POST["kraj"];

    $dotaz = "INSERT INTO data (jj_jmeno, jj_prijmeni, jj_pohlavi, jj_status, jj_vzdelani, jj_obec, jj_kraj) 
    VALUES ('$jmeno', '$prijmeni', '$pohlavi', '$status', '$vzdelani', '$obec', '$kraj')";

    mysqli_query($spojeni, $dotaz);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="Home_Jakes.php">⬅ Zpět na hlavní stránku</a>
    <h1>Vlozeni</h1>
    
    <form method="POST">
        jmeno: <input type="text" name="jmeno" required><br><br>
        prijmeni: <input type="text" name="prijmeni" required><br><br>    
        pohlavi (M/Z): <input type="text" name="pohlavi" required><br><br>
        status: <input type="text" name="status" required><br><br>
        vzdelani: <input type="text" name="vzdelani" required><br><br>
        obec: <input type="text" name="obec" required><br><br>
        kraj: <input type="text" name="kraj" required><br><br>
        <input type="submit" name="odeslat" value="Odeslat">
    </form>
    
</body>
</html>