<?php
    $a = 5;
    $b = 10;

    $operator = '/';


    switch ($operator)
    {
        case '+':
            $summ = $a + $b;
            break;
        case '-':
            $summ = $a - $b;
            break;
        case '*':
            $summ = $a * $b;
            break;
        case '/':
            if ($b==0){
                $summ ="Деление на 0 запрещено!";
            }else{
                $summ = $a / $b;
            }
            break;

        default:
            $summ = "Неизвестный оператор $operator";
    }
    echo $summ;