 <h1>ČAJ - lahodný nápoj</h1>
 <?php

 ?>
 
        <nav>
            <ul>
                <!--
                <li><a href="index.php">Úvodní strana</a></li>
                <li><a href="cerny.php">Černý čaj</a></li>
                <li><a href="zeleny.php">Zelený čaj</a></li>
                <li><a href="oolong.php">Oolong</a></li>
                <li><a href="bily.php">Bílý čaj</a></li>
-->
                <?php
                
                $stranky = ["uvod"=>"Úvodni strana","zeleny"=>"Zelený čaj","cerny"=>"Černý čaj","oolong"=>"Oolong","bily"=>"Bílý čaj","zluty"=>"Žlutý čaj"];
                foreach($stranky as $klic => $hodnota) {
                    echo "<li><a href='index.php?strana=$klic'>$hodnota</a></li>";
                }

                ?>
            </ul>
        </nav>