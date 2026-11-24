<?php
$host= "localhost";
$user= "root";
$pass= "";
$db= "pracedba2";

$spojeni =mysqli_connect($host, $user, $pass, $db);

if (!$spojeni) {
    echo "Nepodarilo se pripojit k databazi";
}
mysqli_set_charset($spojeni, "utf8");


?>