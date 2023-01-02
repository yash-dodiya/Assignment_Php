<?php

$physics=50;
$chemestry=50;
$biology=70;
$mathematics=50;
$computer=60;

$sum=($physics+$chemestry+$biology+$mathematics+$computer);

// echo $sum;

$per=($sum/5);

echo $per;

if($per>=80)
{
   echo " Grade : A++";
}
else if($per>=70)
{
    echo " Grade: B";
}
else if($per>=60)
{
    echo " Grade: C";
}
else if($per>=50)
{
    echo " Grade: D";
}
else if($per>=40)
{
    echo " Grade: E";
}
else
{
    echo " Fail";
}


?>