<?php

$file = fopen("soubor.txt", "a+"); //otevreni nebo i vytvoreni souboru
/*

if(file_exists("soubor.txt")) {
 echo "Soubor soubor.txt existuje!";
 } else {
 echo "Soubor soubor.txt neexistuje!";
 }
 */

//echo fread($file,filesize("soubor.txt")); // nacteni obsahu souboru
$text = "nejaky text ktery se bude pripisovat";
fwrite($file, $text);
readfile("soubor.txt");
copy("soubor.txt", "kopie.txt");
rename("kopie.txt", "kopie2.txt");
unlink("kopie2.txt");

$datumv = filectime("soubor.txt");
echo date("j. n. Y", $datumv);




fclose($file); // zavreni souboru



?>

