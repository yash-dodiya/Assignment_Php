
<?php

class Myclass{
        protected function Myfun(){
            echo "this is a my class";
        }
}
class Otherclass extends Myclass{
        public function Myfun1(){
            echo "this is Otherclass<br>";
            parent::Myfun();
            
        }
}
$obj=new Otherclass;
$obj->Myfun1();
?>
