<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        td,th{
            border: 1px solid black;
            padding: 5px;
        }
        th{
            background-color: lightblue;
        }
        td{
            background-color: lightyellow;
        }

    </style>
</head>
<body>


    


<?php
$burger = 95;
$koktejl = 56;
$cola = 25;

$pocet_hamburger = 2;
$pocet_koktejl = 1;
$pocet_cola = 1;

$zaklad = ($pocet_hamburger * $burger ) + $koktejl + $cola;

$spropitne = $zaklad * 0.16;

$pred_dani = $zaklad + $spropitne;

$dph = $zaklad * 0.075;
$cena_s_dani = $zaklad + $dph;

$celkem = $pred_dani + $dph;

echo "Základní cena: $zaklad Kč<br>";
echo "Spropitné (16 %): $spropitne Kč<br>";
echo "Cena před daní: $cena_s_dani Kč<br>";
echo "Daň (7,5 %): $dph Kč<br>";
echo "Celkem k zaplacení: $celkem Kč";
echo "<br>";
echo "<br>";



?>


<table>
<tr>
     <th>polozka</th>
     <th>pocet kusu</th>
     <th>cena za kus</th>
     <th>celkem</th>
</tr>
<tr>
    <td>hamburger</td>
    <td><?php echo $pocet_hamburger ?></td>
    <td><?php echo $burger ?></td>
    <td> <?php echo $celkem ?> </td>
</tr>

<tr>
    <td>koktejl</td>
    <td><?php echo $pocet_koktejl ?></td>
    <td><?php echo $koktejl ?></td>
    <td><?php echo $koktejl ?></td>
</tr>

<tr>
    <td>cola</td>
    <td><?php echo $pocet_cola ?></td>
    <td><?php echo $cola ?></td>
    <td><?php echo $cola ?></td>
</tr>
<tr>
    <td colspan="3">celkem bez dane</td>
    <td><?php echo $zaklad ?></td>
    
</tr>
<tr>
    <td colspan="3">celkem po dani</td>
    <td><?php echo $cena_s_dani ?></td>
    
</tr>
<tr>
    <td colspan="3">celkem po dani + dysko</td>
       <td> <?php echo $celkem ?></td>

    
</tr>


</table>
</body>
</html>