<?php
include "pripoj.php";

$zprava = "";

if(isset($_POST["odeslat"])){
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];

    if($jmeno=="" || $prijmeni==""){$zprava = "Musi zadat jmeno a prijmeni";
    }else{
        if($jmeno != "" && $prijmeni == "") $sql = "DELETE FROM data WHERE jj_jmeno = '$jmeno'";
        if($jmeno == "" && $prijmeni != "") $sql = "DELETE FROM data WHERE jj_prijmeni = '$prijmeni'";
        if($jmeno != "" && $prijmeni != "") $sql = "DELETE FROM data WHERE jj_jmeno = '$jmeno' AND jj_prijmeni = '$prijmeni'";

        mysqli_query($spojeni, $sql);

        $pocet = mysqli_affected_rows($spojeni);

        $zprava = "Smazano $pocet zaznamu"; 
        
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
    <a href="Home_Jakes.php">⬅ Zpět na hlavní stránku</a><br><br>
    <form method="post">
        Jmeno:<input type="text" name="jmeno"><br>
        prijmeni:<input type="text" name="prijmeni"><br>
        <input type="submit" name="odeslat" value="Smazat">
    </form><br><br>
    <?php echo $zprava; ?>@
    
</body>
</html>