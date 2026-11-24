<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "hotely.php" method = "post">
        <Strong>Serad podle</strong><br>
    <select name="seradit_podle">
        <option>Číslo</option>
        <option>Nazev</option>
        <option>Typ</option>
        <option>Ulice</option>
        <option>Mesto</option>
        <option>PSC</option>
        <option>Pocel luzek</option>
        <option>Parkoviste</option>
</select>
<br>
vzestupne <input type="radio" checked value="ASC" name="razeni"><br>
sestupne <input type="radio" value="DESC" name="razeni">   <br><br>
<strong>Vyber typ ubytovani</strong><br>
<select name="typ">
    <option VALUE = "%">vse</option>
    <option VALUE = "botel">botel</option>
    <option VALUE = "hotel">hotel</option>
    <option value = "motel">motel</option>
    <option value = "penzion">penzion</option>
    <option value = "soukrome">soukrome</option>
</select><br><br>

<strong>Parkovani v miste </strong><br>
<select name="parkovani">
    <option VALUE="%">nerozhoduje</option>
    <option VALUE = "ANO">ANO</option>
    <option VALUE = "NE">NE</option>
</select><br><br>

<input type="submit" name="odeslat" value="Zobraz"><br><br>

</form>
    <?php
$server = "localhost";
$user = "root";
$passwd = "";
$datab = "jakes";


$vybrany_typ = htmlspecialchars($_POST['typ']);
$vybrane_parkovani = htmlspecialchars($_POST['parkovani']);
$seradit_podle = htmlspecialchars($_POST['seradit_podle']);
$smer_razeni = htmlspecialchars($_POST['razeni']);



$condb = mysqli_connect($server, $user, $passwd,$datab); //proceduralne 
// $condb = new mysqli($server, $user, $passwd,$datab); objektove
if(!$condb){die("chyba pripojeni ( ". mysqli_connect_errno()."):" . mysqli_connect_errno());}

mysqli_set_charset($condb, "utf8");
if(isset($_POST['odeslat'])){
$vybrany_typ = htmlspecialchars($_POST['typ']);
$vybrane_parkovani = htmlspecialchars($_POST['parkovani']);
$seradit_podle = htmlspecialchars($_POST['seradit_podle']);
$smer_razeni = htmlspecialchars($_POST['razeni']);

    $dotaz = "SELECT * FROM hotely WHERE typ like '$vybrany_typ' AND parkoviste like '$vybrane_parkovani' ORDER BY $seradit_podle $smer_razeni;";

}else{
    $dotaz = "SELECT * FROM hotely ";
}

$vysledek = mysqli_query($condb, $dotaz);
$pocet = mysqli_num_rows($vysledek);
echo "<table border = 1>";     
while($radek = mysqli_fetch_array($vysledek)){
    echo"<tr>";
    echo "<td>$radek[0]</td>";
    echo "<td>$radek[1]</td>";
    echo "<td>$radek[2]</td>";
    echo "<td>$radek[3]</td>";
    echo "<td>$radek[4]</td>";
    echo "<td>$radek[5]</td>";
    echo "<td>$radek[6]</td>";
    echo "<td>$radek[7]</td>";
    echo "<td>$radek[8]</td>";
    echo "</tr>";
}
echo"</table>";

    ?>


 
    
</body>
</html>