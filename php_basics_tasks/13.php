<?php
    $s = 200; // in 'hours'
    $t = 5; // in 'km'

    $V1 = $s / $t ; // speed, km/hour
    $V2 = ($s / $t) * 0.28; // speed, m/sec

    echo 'Speed of vehicle is equal' . ' '. $V1 . ' '. 'km/hour <br />';
    echo 'Speed of vehicle is equal' . ' '.$V2 . ' '.'m/sec';