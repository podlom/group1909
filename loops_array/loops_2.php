<?php

    /*
     * Вычислить р! (факториал)
     */

    // пример - факториал 4!
    $fact = 1;

    for($num = 4; $num > 0; $num--)
    {
        $fact *= $num;
    }

    echo ($fact);