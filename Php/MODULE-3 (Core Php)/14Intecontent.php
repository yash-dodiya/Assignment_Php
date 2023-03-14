<?php

/*   Use a for loop to total the contents of an integer array called numbers which
has five elements. Store the result in an integer called total. 
*/

$total=0;

for($loop=0;$loop<5;$loop++)
{
    $total=$total+$loop;
}
echo "sum of 0 to 5 number contents   =".$total."<br>";


// for( loop = 0, total = 0; loop < 5; loop++ )
// 		total = total + numbers[loop];
?>
    