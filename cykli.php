<?php

//cykli

/* $n = 100;
$i = 1;

while ($i <= $n){
    echo "$i ";
    $i++;
}

echo "<br>";

$x = 7;
$nadpis= 1;
while($nadpis < $x){
   echo "<h$nadpis> Nadpis uroven </$nadpis> ";
  $nadpis++;
}*/

$x = 20;
$n = 1;

echo "<table border = 1;>
    <tr>
        <th>X</th>
        <th>X<sup>2</sup></th>
        <th>X<sup>3</sup></th>
    </tr>";

while($n <= $x){
    
    
    echo "<tr>";
    echo "<td>$n</td>";
    echo "<td>". ($n ** 2). "</td>";
    echo "<td>". ($n ** 3)."</td>"; 
    echo "</tr>";

    $n++;

}


echo "</table>";

/*$a = 20;
for($i = 1;$a <= $n;$i++){
   // if($i == 3)break;
   if($i == 3) {continue;} 
   echo "<h$i>Nadpis $i. urovne</h$i>";
}*/
echo "<br>";

//cviceni 1
$n = 100;

for($i = 1,$soucet = 0; $i <= $n; $i++){
    //$soucet = $soucet + $i;
    $soucet = $soucet + $i;

}
echo $soucet;

//cviceni 2
echo "<br>";

$min = 10;
$max = 100;
$soucet =0;
for ($i = $min; $i <= $max; $i++) {
    $soucet += $i;
}
echo "soucet cisel od $min do $max je $soucet";
//cviceni 3 nasobkz daneho cisla od minima po maximum
$cislo = 2;
$max = 100;

for($i = $cislo; $i <= $max; $i += $cislo){
    echo $i. "<br>";
}
echo "<br>";

//vypocet faktorialu
$n = 5;

for($i = 1,$faktorial = 1; $i <= $n; $i++){
    //$soucet = $soucet + $i;
    $faktorial = $faktorial * $i;

}
echo $faktorial;

//zobrazit tabulku s danym poctem radku a sloupcu
 $radky = 7;
 $sloupce =9;

 echo "<table border= 1>";

 for($i = 1; $i <= $radky; $i++){
    echo "<tr>";
        for($j = 1; $j <= $radky;$j++ ){
            echo"<td> sloupec $j</td>";

        }

    echo "</tr>";
 }

echo "</table>";

//cviceni 8 prevadeni stupnu celsia od -40 do 100 na fahrenheita
echo "
<table>
 <tr>
 <th>Stupně Celsia (°C)</th>
 <th>Stupně Fahrenheita (°F)</th>
 </tr>";

$min=-40;
$max = 100;

for($c = $min; $c <= $max; $c += 10){
    $f = ($c * 9 / 5) + 32;
    echo "<tr><td>$c</td><td>$f</td></tr>";
}

echo "</table>";

//priklady na procvicenui
//vypis suduch cisel od 1 do 100
$min = 1;
$max = 100;

for ($i = $min; $i <= $max; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}

// vypocet souctu vsech lichych cisel od 1 do 100

echo"<br>";
$soucet = 0;
$min = 1;
$max = 100;

for ($i = $min; $i <= $max; $i++) {
    if ($i % 2 != 0) {  // pokud je číslo liché
        $soucet += $i;
    }
}

echo "soucet lichych od 1 do 100 je $soucet";
echo"<br>";

// vypsat cisla od 1 do 20 a u kazdeho cisla naspat jestli je sude nebo liche
echo"<br>";
$min = 1;
$max = 20;

for ($i = $min; $i <= $max; $i++){
    if($i % 2 ==0){
        echo"cislo $i je sude";
        echo"<br>";
    }else{
        echo "cislo $i je liche";
        echo"<br>";
    }
}

//vypis fibonaciho posloupnosti do n-teho clenu 


// vypis vsech delitelu zadaneho cisla
echo "<br>";
$cislo = 11; 

echo " delitele $cislo jsou:<br>";
for ($i = 1; $i <= $cislo; $i++) {
    if ($cislo % $i == 0) {
        echo $i . "<br>";
    }
}

// zjistit jestli je cislo prvocislo
echo "<br>";
$cislo = 5;
$pocetDelitelu = 0;

if($cislo <= 1){
    echo "cislo $cislo neni prvo cislo";
}else{
    for($i =1; $i <= $cislo; $i++){
        if($cislo % $i == 0){
            $pocetDelitelu++;
        }
    
    }
    if($pocetDelitelu == 2){
        echo "cislo $cislo je prvocislo";
    }else{
        echo "cislo $cislo neni prvocislo";
    }
    
}
 echo "<br>";
  echo "<br>";
//vypsat vsechny prvocisla mezi 1 a 100

$min = 1;
$max = 100;

$pocetDelitelu = 0;

for($j = $min ; $j <= $max ;$j++){

 for($i =1; $i <= $j; $i++){
        if($j % $i == 0){
            $pocetDelitelu++;
        }
    
    }
    if($pocetDelitelu == 2){
    echo"$j";
    echo "<br>";
}

}








?>


