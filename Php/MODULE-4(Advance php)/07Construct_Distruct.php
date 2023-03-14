<?php

class student{
    public function __construct(){
        echo "this is a construct function--construct call in first<br><br>";
    }

    
    public function __destruct(){
        echo "this is a distruct function--distruct call in last<br>";
    }

} 

$obj=new student;
?>


<h3> NOTES </h3>
<p>------>1 > construct is called in first </p>
<p>------>2 > distruct is called in last </p>

