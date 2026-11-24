<?php
// Příklady na opakování – pole

// Pomocí cyklu vygeneruj pole složené ze 100 náhodných čísel od 10 do 200.


$pole = [];
 for($i = 0; $i<100; $i++){
    $pole[]=rand(10,200);
 }
 print_r($pole);
 echo"<br>";
echo"<br>";

$pocet = 0;

foreach ($pole as $cislo) {
    if ($cislo > 100) {
        $pocet++;
    }
}
echo "cislel vetsich nez 100 je $pocet";
echo"<br>";
echo"<br>";

// Najdi součet všech lichých čísel
$soucet = 0; 
foreach ($pole as $cislo) {
    if ($cislo % 2 == 1) {
        $soucet = $soucet + $cislo;
    }
}
echo "součet všech lichých čísel je $soucet";
echo"<br>";
echo"<br>";

//. Vypiš všechny hodnoty na sudých indexech.

foreach($pole as $index => $cislo){ 
    if($index % 2 == 0) {
        echo "$index";
    }
}
echo"<br>";
echo"<br>";

// Vytvoř nové pole, kde budou hodnoty původního pole násobené dvěma.

foreach($pole as $cislo){
    $novepole[] = $cislo * 2 ;
}
print_r($novepole);
echo"<br>";
echo"<br>";

//  Spočítej průměr hodnot v poli.

$soucet = array_sum($pole);
$pocet = count($pole);

$prumer = $soucet / $pocet;
echo "$prumer";
echo"<br>";
echo"<br>";

// Najdi počet prvků větších než průměr

$pocetVetsich = 0;

foreach($pole as $hodnota){
    if($hodnota > $prumer){
        $pocetVetsich++;
    }

}

echo "pocet prvku je $pocetVetsich";
echo"<br>";
echo"<br>";

//Vytvoř pole, kde budou pouze hodnoty větší než průměr




?>