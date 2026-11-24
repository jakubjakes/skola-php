<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oprava date</title>
</head>
<body>
    <h1>OPRAVA DAT PODLE PRIJMENI</h1>
       

    <form method = "post">
    prijmeni <input type = "text" name = "prijmeni" required><br>
    ulice <input type = "text" name = "ulice" required><br>
    CP <input type = "text" name = "cp" required><br>
    mesto <input type = "text" name = "mesto" required><br>
    PSC <input type = "text" name = "psc" required><br>
    <input type = "submit" value = "Oprav" name = "oprav">

    
</form>
<?php

    if(isset($_POST['oprav'])){
        include = "connect_databaze.php";
        $prijmeni = htmlspecialchars($_POST['prijmeni']);
        $ulice = htmlspecialchars($_POST['ulice']);
        $cp = htmlspecialchars($_POST['cp']);
        $mesto = htmlspecialchars($_POST['mesto']);
        $psc = htmlspecialchars($_POST['psc']);

        $pocet = mysqli_num_rows($vysledek);
        $dotaz = "SELECT * FROM osoby WHERE prijmeni = '$prijmeni'";
        $vysledek = mysqli_query($condb, $dotaz);

    if($pocet > 0){
        $dotaz = "UPDATE osoby SET ulice = '$ulice', cp = '$cp', mesto = '$mesto', psc = '$psc' WHERE prijmeni = '$prijmeni'";
        $vysledek = mysqli_query($condb, $dotaz);
    if($vysledek){
        echo "Dany zaznam byl zmenen";
    }else{
        echo "dany zaznam se nepodarilo zmenit";
    }
}else{
    echo "dane prijmeni se nepodarilo najit";
}

mysqli_close($condb);


    
    }


?>


</body>
</html>