<?php
    /* 4.25. Дано двузначное число. Определить:
        а) является ли сумма его цифр двузначным числом;
        б) больше ли числа а сумма его цифр. */
    $a = rand(10,99); echo "Сгенерировалось слуайное двузначное число $a \n\n<br/><br/>";
    $b = intdiv($a, 10); // Первая цифра числа
    $c = $a%10; // Вторая цифра числа
    $d = $b + $c; echo "Сумма цифр числа $a равна $d \n\n<br/><br/>";
    $e = intdiv($d, 10); // Целое частное от деления суммы цифр заданного числа на 10
    if($e): echo "Сумма цифр $a является двузначным число равным $d \n\n<br/><br/>";
        else: echo "Сумма цифр $a не является двузначным числом, это цифра $d \n\n<br/><br/>";
    endif;
    if ($a > $d): echo "Сумма цифр числа $a меньше за это число: $d < $a";
        elseif ($a < $d): echo "Сумма цифр числа $a больше за это число: $d > $a";
            else: echo "Сумма цифр числа $a равно этому числу: $a = $d";
    endif;
?>