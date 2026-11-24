<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>Formulář</title>
  </head>
  <body>
  <?php
      if(isset($_POST["odeslat"])){
$jmeno = $_POST["jmeno"];
$prijmeni = $_POST["prijmeni"];
$zvire = $_POST["zvire"];
$pohlavi = $_POST["pohlavi"];
if($pohlavi == "muz"){
echo "<h1>Vyplnil jsem tyto informační údaje: </h1><br>";
echo"Jmenuji se $jmeno $prijmeni <br>";
echo"Moje nejoblíbenější zvíře je $zvire. <br>";
if (isset($_POST["cerna"]) || isset($_POST["bila"]) || isset($_POST["cervena"]) || isset($_POST["modra"])) {
echo "Mé oblíbené barvy: <br>";
}else {
echo "Nemám oblíbené barvy";
}
if(isset($_POST["cerna"])) {
echo "$_POST[cerna]<br>";
}
if(isset($_POST["bila"])) {
echo "$_POST[bila]<br>";
}
if(isset($_POST["cervena"])) {
echo "$_POST[cervena]<br>";
}
if(isset($_POST["modra"])) {
echo "$_POST[modra]<br>";
}
}else{
echo "<h1>Vyplnila jsem tyto informační údaje: </h1><br>";
echo"Jmenuji se $jmeno $prijmeni <br>";
echo"Moje nejoblíbenější zvíře je $zvire. <br>";
if (isset($_POST["cerna"]) || isset($_POST["bila"]) || isset($_POST["cervena"]) || isset($_POST["modra"])) {
echo "Mé oblíbené barvy: <br>";
}else {
echo "Nemám oblíbené barvy";
}
if(isset($_POST["cerna"])) {
echo "$_POST[cerna]<br>";
}
if(isset($_POST["bila"])) {
echo "$_POST[bila]<br>";
}
if(isset($_POST["cervena"])) {
echo "$_POST[cervena]<br>";
}
if(isset($_POST["modra"])) {
echo "$_POST[modra]<br>";
}
}
}else{
  ?>
  <h1>
   Dotazník
  </h1>
   <form method="post">
   
    Jméno: <input type="text" name="jmeno" size="25" placeholder="Vyplňte křestní jméno" required><br><br>
    Příjmení: <input type="text" name="prijmeni" size="25" placeholder="Vyplňte příjmení" required><br><br>
    Pohlaví:<br>
    <input type="radio" name="pohlavi" checked value="muz"> muž<br>
    <input type="radio" name="pohlavi" value="zena"> žena <br><br>
    
    Nejoblíbenější zvíře:
    <select name="zvire">
     <option value="pes">Pes</option>
     <option value="kočka">Kočka</option>
     <option value="myš">Myš</option> 
    </select>
    
    <br><br>
    Oblíbená barva:<br>
    <input type="checkbox" name="cerna" checked value="černá"> černá<br>
    <input type="checkbox" name="bila" value="bílá"> bílá<br>
    <input type="checkbox" name="cervena" value="červená"> červená<br>
    <input type="checkbox" name="modra" value="modrá"> modrá<br> <br>
    
    <input type="submit" value="Odeslat údaje" name="odeslat">
         
   </form>
   <?php
}
   ?>
  </body>
</html>