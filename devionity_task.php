<?php
    /*Создать массив из названий 5 стран мира. Вывести массив на экран при помощи print_r внутри тегов <pre>, </pre>
     *    *
     */
    $countries = array('Mongolia', 'Ukraine','USA','Canada','Japan');

    echo '<pre>';

    print_r($countries);

    echo '</pre>';

    /*
     *Создать ассоциативный массив из 5 элементов, в котором ключи - это названия стран, а значения элементов - это столицы
     * стран. Вывести массив на экран.
     */
    $new_country = array('Romania'=>'Buharest', 'UK'=>'London', 'France'=>'Paris', 'German'=>'Berlin', 'Poland'=>'Warshawa');

    echo '<pre>';

    print_r($new_country);

    echo '</pre>';


    /*
     *Создать многомерный массив, который иллюстрирует список товаров. Каждый товар - это книга.
     * Каждая книга имеет стиль, автора, название и цену. В списке товаров должно быть не менее 3 книг.
     */

    $book_1 = array('fiction'=>'J.MocDowell','name'=>'Grienfields','price'=>45);
    $book_2 = array('science'=>'Barbara Oakly','name'=>'How to think quickly','price'=>72);
    $book_3 = array('history'=>'Smoliy', 'name'=>'A short history of Ukraine','price'=>5);

    $goods = array($book_1, $book_2, $book_3);

    echo '<pre>';

    print_r($goods);

    echo '</pre>';

    /*
     *Определить константы, которые соответствуют названиям нескольких стран мира. Используя эти константы, сформировать
     * массив из соответствующих значений
     */

    define('Hungary', 32);
    define('Moldova', 3.5);
    define('Slovakia', 2.71);

    $population = array(Hungary, Moldova, Slovakia);

    echo '<pre>';

    print_r($population);

    echo '</pre>';

    /*
     * Вычислить количество секунд в году и присвоить это значение переменной.
     * Вычислить остаток от деления этого значения на 2.
     */

    $sec = 365 * 24 * 60 * 60; // вычисление количества секунд в году
    $ostatok = $sec / 2; // вычисление остатка от деления количества секунд в году на 2

    echo '<pre>';
    echo ($sec . '</br>' . $ostatok);
    echo '</pre>';


    /*
     *Создать строку, содержащую число 12345, используя лишь отдельные цифры 1, 2, 3, 4, 5 и операцию конкатенации.
     */

    $str = 1 . 2 . 3 . 4 . 5;

    var_dump($str);

    /*
     *Вычислить значение выражения: false&&true||false&&true||!false&&true
     */
    echo '<pre>';

    $funk = false&&true||false&&true||!false&&true;
    echo($funk);

    echo '</pre>';

    /*
     *Вывести на экран true/false в зависимости от того, делится переменная $x на 2 или нет.
     */

    $x = 47;

    if($x%2==0)
    {
        echo('true');
    }else{
        echo('false');
    }