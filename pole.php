<?php
//POlE
//1.zpusob

$tyden = array(1 => "pondeli", "utery", "streda", "ctvrtek", "patek", "sobota", "nedele");
var_dump($tyden);
echo "<br>";echo "<br>";
print_r($tyden);
echo "<br>";echo "<br>";


//2.zpudob
$tyden2 =  [ 1 => "pondeli", "utery", "streda", "ctvrtek", "patek", "sobota", "nedele"];
print_r($tyden2);
echo "<br>";echo "<br>";

//3.zpusob

$tyden3[1] = "pondeli";
$tyden3[] = "utery";
$tyden3[] = "streda";
$tyden3[] = "ctvrtek";
$tyden3[] =  "patek";
$tyden3[] = "sobota";
$tyden3[] = "nedele";
print_r($tyden3);
echo "<br>";echo "<br>";
$tyden3[] = "volno";
$tyden3[62] = "prazdniny";
$tyden[] = "dovolena";

unset($tyden3[62]);
$tyden3[63] = "prazdniny";



print_r($tyden3);
echo "<br>";echo "<br>";

//asociativni pole
$vysky = ["Daniel" => 200, "Martin" >= 110, "Dominik" >= 152, "Jachym" >= 167 ];
print_r($vysky);
echo "<br>";echo "<br>";
$pocet = count($vysky);
echo $pocet;
echo "<br>";echo "<br>";
echo array_sum($vysky);
echo "<br>";echo "<br>";

$cisla= range(100,500);
print_r($cisla);
echo "<br>";echo "<br>";

$pismena = range("a","k");
print_r($pismena);
echo "<br>";echo "<br>";

$cislan = array();
for($i=1;$i<=50;$i++){
    $cislan[$i] = $i;
}
print_r($cisla);
echo "<br>";echo "<br>";

//cyklus foreach
foreach($tyden as $klice => $hodnota){
    echo"$klice. den v tydnu je $hodnota";
}

$filmy = ["19.5"=>"Hobit","12.8"=>"ARCANE","15.2"=>"LE MANS 66","13.6"=>"DUNA"];
print_r($filmy);
echo "<br>";echo "<br>";
echo "<table border=1> <tr><td>Nazev</td><td>Hodnoceni</td></tr>";
foreach($filmy as $hodnoceni => $nazev){
    echo "<tr><td>$nazev</td><td>$hodnoceni</td></tr>";
}
echo "</table>";


$filmy = ["19.5"=>"Hobit","12.8"=>"ARCANE","15.2"=>"LE MANS 66","13.6"=>"DUNA"];
krsort($filmy);
echo "<br>";echo "<br>";
echo "<table border=1> <tr><td>Nazev</td><td>Hodnoceni</td></tr>";
foreach($filmy as $hodnoceni => $nazev){
    echo "<tr><td>$nazev</td><td>$hodnoceni</td></tr>";
}
echo "</table>";
echo "<br>";echo "<br>";

$slovo = "K!n!e!d!l!i!k";
$pole = explode("!", $slovo);
print_r($pole);





//pole obsahujici jednotliva pismena slova "abeceda"
$slovo = array("a","b","c","e","d","a");
echo "<br>";echo "<br>";
print_r($slovo);



//prepsat pomoci indexace na ABEceda

$slovo[0] = "A";
$slovo[1] = "B";
$slovo[2] = "E";

//vypsat jednotlive prvky pomoci echo podsebe
echo "<br>";echo "<br>";
echo $pole[0],"<br>",$pole[1],"<br>",$pole[2],"<br>",$pole[3],"<br>",$pole[4],"<br>",$pole[5],"<br>",$pole[6],"<br><br>";
echo "<br>";echo "<br>";
//vypsat jednotlive prvky pomoci cyklu
foreach($pole as $p){
    echo"$p<br>";
}
echo "<br>";echo "<br>";
//vypsat pocet prvku v poli
$pocet = count($pole);
echo $pocet;
echo "<br>";echo "<br>";
//vytvorit pole cisel 15 23 14 18 29 dvema ruznymi zpusoby

$cisla = [15, 23, 14, 18, 29];
$cisla2 = array(15, 23, 14, 18, 29);

// secist prvni dva prvku z $cisla a odecist 3 prvek vysledek do promene vysledek

$vysledek = $cisla[0] + $cisla[1] - $cisla[2];
echo "Vysledek: $vysledek<br><br>";

// aritmetivky prumer prvku pole $cisla
$prumer = array_sum($cisla)/count($cisla);
echo "Prumer: $prumer";
echo "<br>";echo"<br>";

//rozedlit slovo informace hvezdickami

$retezec = "i-n-f-o-r-m-a-c-e";
$poleZnaku = explode("-", $retezec);
echo implode("*", $poleZnaku);



?>