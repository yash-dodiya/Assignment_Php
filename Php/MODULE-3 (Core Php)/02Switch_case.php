<?php

/*
PHP program for find „Thursday‟ in week using switch
Function.
*/

$Weekday=4;

switch($Weekday)
{
    case 1:
    echo " Monday...";
    break;
    case 2:
    echo " Tuesday...";
    break;
    case 3:
    echo " Wendnday...";
    break;
    case 4:
    echo " Thursday...";
    break;
    case 5:
    echo " Friday...";
    break;
    case 6:
    echo " Saturday...";
    break;
    case 7:
    echo " Sunday...";
    break;
    default:
    echo "Plz enter valied weekday...";
}
?>