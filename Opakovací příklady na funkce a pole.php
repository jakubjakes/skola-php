<?php
//Vygeneruje náhodného pole (parametry: počet prvků, minimum a maximum)


echo "Vygeneruje náhodného pole";
echo "<br>";
$pocet = 20;
$min = 1;
$max = 100;

function generuj_pole($pocet, $min, $max)
{
    $pole = array();

    for($i = 0; $i < $pocet ; $i++){
        $randomCislo = rand($min, $max);
        $pole[] = $randomCislo;
    }

    return $pole;


}
print_r(generuj_pole(50, -20, 100));
$pole1=generuj_pole(50, -20, 100);
echo "<br>";
echo "<br>";
print_r($pole1);
echo "<br>";
echo "<br>";
echo "<br>";

// Spočítá počet kladných a záporných čísel v poli (parametr: pole; vrátí dvouprvkové pole ['kladne'=>$kladne,'zaporne'=>$zaporne])

echo "Spočítá počet kladných a záporných čísel v poli";
echo "<br>";
function pocetKladnychZapornych($pole){

$pocetKladnych = 0;
$pocetZapornych = 0;


foreach($pole as $cislo){
    if($cislo > 0){
        $pocetKladnych++;
    }else if($cislo < 0){
        $pocetZapornych++;
    }
}
return[$pocetKladnych, $pocetZapornych];

}
print_r(pocetKladnychZapornych($pole1));
echo "<br>";
echo "<br>";

// Vypočítá součet sudých a lichých čísel (parametr: pole; vrátí dvouprvkové pole['sude' => $sude, 'liche' => $liche]
echo "součet sudých a lichých čísel";
echo "<br>";
function soucetSudychLichych($pole){

$pocetSudych = 0;
$pocetLichych = 0;

foreach($pole as $cislo){
    iF($cislo % 2 ==0){
       
        $pocetSudych += $cislo;
    }else{
        
        $pocetLichych +=$cislo;
    }
}
return[$pocetSudych, $pocetLichych];
}
print_r(soucetSudychLichych($pole1));
echo "<br>";
echo "<br>";

//Spočítá četnost prvků v poli (parametr: pole; vrátí pole četností prvků)
echo "Spočítá četnost prvků v poli (parametr: pole; vrátí pole četností prvků)";
echo "<br>";
function cetnost($pole){
    $cetnost = [];

    foreach($pole as $cislo){
        if(isset($cetnost[$cislo])){
            $cetnost[$cislo]++;
            
        }else{
            $cetnost[$cislo] = 1;
        }
    }
    return $cetnost;
}
print_r(cetnost($pole1));





?>