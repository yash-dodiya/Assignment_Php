


<h3> • How to Call Parent Constructor? </h3>
<p>---------->In order to run a parent constructor, a call to parent::__construct() within 
    the child constructor is required. If the child does not define a constructor then 
    it may be inherited from the parent class just like a normal class method 
    (if it was not declared as private). $obj = new OtherSubClass();</p>
    




<?php

class myclass{
    protected function animal(){
        echo "i am an Animal<br>";
    }
}
class Otherclass extends myclass{
    public function dog(){
        parent::animal();
        echo "i am Dog<br>";
    }
}

$obj=new Otherclass;
$obj->Dog();

?>