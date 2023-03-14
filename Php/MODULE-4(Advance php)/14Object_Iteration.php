<?php

/*  • Write PHP Script of Object Iteration?  */

class yash{
    public $public="public variable";
    public $public1="public variable1";
    public $public2="public variable2";
    
    private $private="private variable:";
    protected $protected="protected variable";

    function iteratevisiable(){
        echo "yash::iteratevisiable:\n";
        foreach($this as $key=>$value){
            print "$key=>$value\n";
        }
    }
}

$obj=new yash;

foreach($obj as $key=>$value){
    print "$key=>$value\n";
}
echo "\n";
$obj->iteratevisiable();


?> 

<h3>PHP provides a way for objects to be defined so it is possible to iterate through a list of items, with, for example a foreach statement. By default, all visible properties will be used for the iteration.

</h3>

<p>--------->PHP provides a way for objects to be defined so it is possible to iterate through 
    a list of items, with, for example a foreach statement. By default, all visible properties 
    will be used for the iteration.</p>