<?php
/* $a = 2;
$b = 2;
if($a > $b){
    echo "$a je vetsi nez $b";
}
elseif($a==$b){
    echo "$a se rovna $b";
}
else{
    echo "$a je mensi nez $b";
}
//cviceni 1
echo "<br>";
$znamka = 3;
if(is_integer($znamka)){ 
    if($znamka >= 1 && $znamka <= 5){
        echo "znamka $znamka je z klasifikacni stupcnice";
    }else {
        echo "znamka $znamka neni z klasifikacni stupnice";
    }
}else{
        echo "zadej cele cislo";
    }
echo "<br>";
//cviceni 2

$cislo = 1;
if($cislo > 0){
    echo "cislo je kladne";
}elseif($cislo == 0){
    echo "cislo je 0";
}else{
    echo "cislo je zaporne";
}
echo "<br>";
//cviceni 3
$cislo1=10;
$cislo2=0;

if( $cislo2 == 0 ){
    echo"nulou se nedeli ani v nedeli";
}else {
    $vysledek = $cislo1/$cislo2;

echo "$cislo1 / $cislo2 = $vysledek ";

}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//cviceni 4
$odvesna1=5;
$odvesna2=5;

if($odvesna1 == $odvesna2){
    echo "odvesny se rovnaji takze je to ctverec";
}else{
    echo "odvesny se nerovnaji takze je to obdelnik";
}
echo "<br>";
echo "<br>";
echo "<br>";
//cviceni 5


$cislo = 7; 
if(is_int($cislo)){ 
    if ($cislo % 2 == 0) {
       echo "Číslo $cislo je sudé.";
    } else {
         echo "Číslo $cislo je liché.";
} }
echo "<br>";
echo "<br>";
echo "<br>";
//cviceni 6


$a = 5;
$b = 5;
$c = 8;

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    if ($a == $b && $b == $c) {
        echo "trojuhelnik je rovnostranz.";
    } elseif ($a == $b || $a == $c || $b == $c) {
        echo "trojuhelnik je rovnorameny.";
    } else {
        echo "trojuhelnik je obecny.";
    }
} else {
    echo "mas spatny hodnoty, nebude to trojuhelnik.";
}

//cviceni 7
$cislo =352 ;
$a = 238;
$b = 456;

if ($cislo > $a && $cislo <= $b){
    echo "$cislo do intervalu patri";
}else{
    echo "$cislo do intervalu nepatri";
} 
//cviceni 8

$cislo = -10;
$absolutni = abs($cislo);
echo "absolutni hodnota je $absolutni";


//cviceni 9
$polomer=10;
$vyska=100;
$objem_v_litrch=31.4;
$objem_celkem = (3.14 * ($polomer * $polomer) * $vyska) / 1000;
if($objem_celkem >= $objem_v_litrch){
    echo "do nadoby se to vejde";
    $vyska_tekutiny=$objem_v_litrch * 1000 /(3.14 * ($polomer * $polomer));
    echo "vyska tekutiny je $vyska_tekutiny cm";
}else{
    echo "nevejde se";
}
  
//cviceni 10

$hmotnost = 67;
$vyska = 188;
$vyskaM = $vyska / 100;
$bmi = $hmotnost / ($vyskaM * $vyskaM);

if($bmi < 16.5){
    echo"tezka podviziva";
}else if($bmi <= 18.5){
    echo"podvaha";
}else if($bmi <= 25){
    echo "idealni vaha";
}else if($bmi <=30){
    echo "nadvaha";
    echo "obezita 1. stupne";
}else if($bmi <=40){
    echo"obezita 2. stupne";
}else{
    echo "obezita 3. stupne(morbidni obezita)";
}


// vypsat cesku nazev aktualniho dne
*/



$den = date('N');

switch ($den) {
    case 1:
        echo "Pondělí";
        break;
    case 2:
        echo "Úterý";
        break;
    case 3:
        echo "Středa";
        break;
    case 4:
        echo "Čtvrtek";
        break;
    case 5:
        echo "Pátek";
        break;
    case 6:
        echo "Sobota";
        break;
    case 7:
        echo "Neděle";
        break;
    default:
        echo "Neznámý den";
        break;
}


function soucet($a,$b){
    echo $a+$b;
}
soucet(10,20);
return



?>