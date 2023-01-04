<?php 

/*   Write a PHP program to find the largest of three numbers using ternary
Operator
*/

$a=156;
$b=20;
$c=30;

$largest_nu=($a>$b && $a>$c)? $a: (($b>$c)? $b:$c);

echo  $largest_nu;


?>