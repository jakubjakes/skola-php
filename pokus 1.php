<?php
echo "Dobry den<br> pani ucitelko" ; 
echo "<br>";
// promena
$jmeno = "Jakub";
echo $jmeno;
echo "<br>";
$kopie = $jmeno;
$alias =& $jmeno;
$jmeno = "karel";

echo $kopie;
echo "<br>";
echo $alias;
echo "<br>";
echo "<br>";
echo "<br>";
$cislo = 13.8;
echo $cislo;
echo "<br>";
echo "<br>";

echo isset($cislo);
echo "<br>";
#unset($cislo)
echo gettype($cislo);
echo "<br>";

define("SKOLA", "stredni skola technicka a dopravni gustava habrmana ceska trebobva");
echo SKOLA;
echo "<br>";

$trida="I42";
echo "jsem zakem tridy $trida";
echo "<br>";
echo 'jsem zakem tridy $trida';
echo "<br>";

$jmeno = "jakub";
$prijmeni = "Jakes";
echo "jmenuji se ".$jmeno." * ".$prijmeni.".";


$slovo = "ne";
$slovo.= "fun";
$slovo .="guje";

echo $slovo;
echo "<br>";

$hlava = "mozek";
echo $hlava[2];
echo "<br>";
$x=9;
$y=8;
echo $x++;
echo ++$y;

var_dump(12 === 12.0);

?>
