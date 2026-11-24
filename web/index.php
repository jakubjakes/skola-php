<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <?php
    include "header.php";
    ?>
    </header>
    <main>
    <?php
    if(isset($_GET['strana'])){
    $strana = htmlspecialchars($_GET['strana']);
    
        include "$strana.php";
    
    }else{

        include "uvod.php";
    }
    
    ?>
    </main>
    <footer>
        <?php
        include "footer.php";
        ?>
        </footer>
</body>
</html>