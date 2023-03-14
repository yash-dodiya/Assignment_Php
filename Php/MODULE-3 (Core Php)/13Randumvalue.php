<?php


/* Get random values from array  */


$Subject=array("a"=>'Maths','b'=>'Gujrati',"c"=>'English');

$new1=array_rand($Subject,2);
echo "<pre>";
print_r($new1);
echo "</pre>";



?>