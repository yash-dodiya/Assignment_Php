<?php

/*  Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,
o 34
*/

$a=1;
$b=0;
$c=0;

for($a=0;$a<=100;$a++)
{
    echo "<br>$a";
    $c=$a+$b;
    $a=$b;
    $b=$c;
   
}
?>