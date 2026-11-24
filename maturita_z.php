<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>Dotazník</title>
  </head>
  <body>
  <?php
    // if($_SERVER["REQUEST_METHOD"]=="POST"){
      if(isset($_POST["odeslat"])){
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
$jmeno = test_input($_POST["jmeno"]);
$prijmeni = test_input($_POST["prijmeni"]);
$adresa = test_input($_POST["adresa"]);
$email = test_input($_POST["email"]);
$pohlavi = test_input($_POST["pohlavi"]);
$termin = test_input($_POST["termin"]);
echo"Vaše přihlášení proběhlo v pořádku. <br><br>"; 
echo"Student: $jmeno $prijmeni <br>";
echo"Adresa: $adresa <br><br>";
echo "Maturitní předměty:<br>";
if(isset($_POST["cjk"])) {
echo "$_POST[cjk]</ul><br>";
}
if(isset($_POST["anj"])) {
echo "$_POST[anj]<br>";
}
if(isset($_POST["mat"])) {
echo "$_POST[mat]<br>";
}
if(isset($_POST["sw"])) {
echo "$_POST[sw]<br>";
}
if(isset($_POST["hw"])) {
echo "$_POST[hw]<br>";
}
echo "</ul><br>";
echo "Termin: $termin <br><br>";
echo"Informace s pozvánkou vám pošleme na email: $email. <br><br>";

}else{
    echo "Pro registraci musis odeslat formular";
}
  ?>
 <h1>Dotazník</h1>
  <form method="post">
    <label for="jm">Jméno</label> <input type="text" name="jmeno" size="20" required id="jm">  <br> <br>
    <label for="prjm">Příjmení</label> <input type="text" name="prijmeni" size="20" id="prjm" required>  <br><br> 
    <label for="adr">Adresa</label> <textarea name="adresa" rows="3" cols="30" id="adr" required></textarea>  <br><br> 
    <label for="email">Email</label> <input type="email" name="email" size="30" id="email" required>  <br><br>
    Pohlaví:<br> 
    <input type="radio" name="pohlavi" value="žena" id="z" checked>  <label for="z">žena</label> <br>
    <input type="radio" name="pohlavi" value="muž" id="m">  <label for="m">muž</label> <br><br>
    Maturitní předměty:<br>
    <input type="checkbox" name="cjk" value="Český jazyk a literatura" id="cj"> <label for="cj"> Český jazyk a literatura </label> <br>
    <input type="checkbox" name="anj" value="Anglický jazyk" id="aj"> <label for="aj"> Anglický jazyk</label> <br>
    <input type="checkbox" name="mat" value="Matematika" id="ma"> <label for="ma"> Matematika</label> <br>
    <input type="checkbox" name="sw" value="Soubor předmětů SW zaměření" id="sw"> <label for="sw"> Soubor předmětů SW zaměření </label> <br>
    <input type="checkbox" name="hw" value="Soubor předmětů HW zaměření" id="hw"> <label for="hw"> Soubor předmětů HW zaměření </label> <br>
     <br>
    <label for="term">Termín:</label>
    <select name="termin" id="term">
      <option value="jaro 2026">jaro 2026</option>
      <option value="podzim 2026">podzim 2026</option>
      <option value="jaro 2027">jaro 2027</option>
    </select>
    <br> <br>
    <input type="submit" value="Přihlásit se" name="odeslat">
    
  </form>  
  <?php
  ?>
  </body>
</html>
