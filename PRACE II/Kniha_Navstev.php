<?php
include "pripoj.php";
    if(isset($_POST["odeslat"])){
    //tohle prej ukazuje presny errory
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //timhle chytim data z formulare
        $jmeno = $_POST["jmeno"];
        $email = $_POST["email"];
        $zprava = $_POST["zprava"];


        //dotaz
        $dotaz = "INSERT INTO kniha_navstev (jj_navstevnik, jj_email, jj_zprava, jj_datum) 
              VALUES ('$jmeno', '$email', '$zprava', NOW())"; //NOW tam je aby se mi ulozil presny cas odeslani zpravy

        //poslu dotaz do databaze
        mysqli_query($spojeni, $dotaz);


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Styly.css">
</head>
<body>
    <a href="Home_Jakes.php">⬅ Zpět na hlavní stránku</a>
    <h1>Kniha Navstev</h1>
    <form method="POST">
        Jmeno: <input type="text" name="jmeno"><br><br>
        Email: <input type="email" name="email"><br><br>
        Zprava: <textarea name="zprava"></textarea><br><br><br>
        <input type="submit" name="odeslat" value="Odeslat">
    </form>
    <hr>
    <h2>Zpravy: </h2>
    <?php
       

        $dotaz = "SELECT * FROM kniha_navstev ORDER BY jj_datum DESC";// vyberu vsechny data a seradim je podle casu
        $vysledek = mysqli_query($spojeni, $dotaz);//poslu dotaz do databaze
        
        //projedu vsechny vzkazy a vypisu je
        
        while($radek = mysqli_fetch_array($vysledek)){
            echo "<div class='vzkazy'>";
            echo $radek["jj_datum"];    echo "<br>";
            echo $radek["jj_navstevnik"];   echo "<br>";
            echo $radek["jj_email"];    echo "<br>";
            echo $radek["jj_zprava"];   echo "<br>";
            echo "<hr>";

            echo "</div>";
        }
       
    
    
    ?>
    
</body>
</html>