<?php

$text = "na hrade okori";
$text = "Hradcany"
if(preg_match("/hrad/ ",$text)){
    echo "vyhovuje";
}else{
    echo "nevyhovuje"
}


?>