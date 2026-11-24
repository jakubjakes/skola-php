<?php
include "pripoj.php";
$zprava = "";

if(isset($_POST["odeslat"])){
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];
    

    $dotaz = "INSERT INTO data (jj_jmeno,jj_prijmeni) VALUES ('$jmeno','$prijmeni')";
    mysqli_query($spojeni, $dotaz);

    if(mysqli_query($spojeni , $dotaz)){
        $zprava = "data byla zapsana";
    }else{
        $zprava = "neco se pokazilo data nebyla zapsana";
    }
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
    <a href="Home_Jakes.php"> <-- Domu</a><br><br>
    <form method="post">
        Jmeno:<input type ="text" name="jmeno">
        Prijmeni:<input type="text" name="prijmeni">
        <input type="submit" name="odeslat">
    </form>
    
</body>
</html>