<?php

    /*
     * Вычислить р! (факториал)
     */

function factorial($p) {
    if ($p === 0) return 1;
    else return $p*factorial($p-1);
}

    // пример - факториал 4!
    $fact = factorial(4)

    echo ($fact);
