<?php
error_reporting(0);

/*
Write a program to find whether a number is Armstrong or not Write a
program to print the below format :
5 9
2610
3711
4812 
*/
  
$num=407;  

$sum=0;  

$temp=$num;

 
while($num>0)  
{  
$ld=$num%10;  
$sum=$sum+($ld*$ld*$ld);  
$num=$num/10;  
}  

if($temp==$sum)  
{  
echo "Yes it is an Armstrong number";  
}  
else  
{  
echo "No it is not an armstrong number";  
}  
?>  




