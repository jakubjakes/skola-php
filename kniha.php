<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Kniha navstev</h1>
<form action="kniha_script.php" method="post">
    jmeno: <input type="text" name="jmeno" required><br>
    email <input type="email" name="email" required><br>
    zprava: <br>
    <textarea name = "zprava" cols = "25"></textarea><br><br>
    <input type="submit" value="odeslat">
</form>
<?php
readfile("kniha.txt");
?>
</body>
</html>