<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SMAZANI DAT PODLE PRIJMENI</h1>


<?php
    if(!isset($_POST['prijmeni'])){
?>
    <form method = "post">
    prijmeni <input type = "text" name = "prijmeni" required><br>
    <input type = "submit" value = "smazat">
   <?php
   }
   else{
    $prijmeni = htmlspecialchars($_POST['prijmeni']);

   
if($pocet > 0){
     $dotaz = "SELECT * FROM osoby WHERE prijmeni = '$prijmeni'";
    $vysledek = mysqli_query($condb, $dotaz);
    if($vysledek){
        echo "Dany zaznam byl smazan";
    }else{
        echo "dany zaznam se nepodarilo smazat";
    }
}
   }
   

?>


</form>

</body>
</html>