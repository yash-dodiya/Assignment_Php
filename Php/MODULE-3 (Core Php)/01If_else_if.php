<?php

$physics=50;
$chemestry=50;
$biology=70;
$mathematics=50;
$computer=60;

$sum=($physics+$chemestry+$biology+$mathematics+$computer);

// echo $sum;

$per=($sum/500)*100;
$average=($sum/5.0);

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

echo "marks of physics=".$physics."<br>";
echo "marks of chemestry=".$chemestry."<br>";
echo "marks of biology=".$biology."<br>";
echo "marks of mathemetics=".$mathematics."<br>";
echo "marks of computer=".$computer."<br>";


echo "the total marks=".$sum."/5<br>";
echo "the average of marks=".$average."<br>";
echo "the persontage =".$per."<br>";


?>