<?php

    $bookDay = "1999-09-05";
    
    $date = strtotime($bookDay);
    $date = strtotime("+1 day", $date);
    echo date('Y-m-d', $date);

?>