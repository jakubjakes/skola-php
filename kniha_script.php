<?php
$text_zpravy = "<div style='border: 1px solid black; padding: 15px; margin: 10px 0; background-color: #f9f9f9; border-radius: 5px; font-family: Arial, sans-serif;'>
    <strong>Návštěvník:</strong> $_POST[jmeno] <br>
    <strong>Datum:</strong> " . date("j. n. Y H:i:s") . "<br>
    <strong>Email:</strong> $_POST[email]<br>
    <hr style='border: 0; border-top: 1px solid black; margin: 10px 0;'>
    <strong>Zpráva:</strong><br>
    $_POST[zprava]
</div>";

$file = fopen("kniha.txt", "r+");
$obsah = fread($file, filesize("kniha.txt"));
rewind($file);
fwrite($file, $text_zpravy . $obsah);
fclose($file);

header("Location: kniha.php");//presmerovani



?>