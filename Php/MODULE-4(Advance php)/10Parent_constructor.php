

<h3> Are Parent Constructor Called Implicitly When Create An ObjectOf Class </h3>

<p>---------> Parent constructors are not called implicitly if the child class defines a constructor. 
    In order to run a parent constructor, a call to parent::__construct() within the child constructor is required.</p>




<?php

class ram{
    public function __construct(){
        echo "my name is ram<br>";
    }
}
class shakti extends ram{
    public  function __construct(){
        parent::__construct();
        echo "this is my son";
    }
}
$obj=new shakti;
?>
