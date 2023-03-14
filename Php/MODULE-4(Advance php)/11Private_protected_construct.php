
<h3> What Happen, If Constructor Is Defined As Private Or Protected </h3>
<p>--------> If a constructor is declared as private, then its objects are only accessible from within 
    the declared class. You cannot access its objects from outside the constructor class</p>
<?php
 
// class yash{
//     private function __construct(){
//        echo "hello how are you<br>";
//     }
// }


class yash{
    public function __construct(){
        echo "hello how are you<br>";
    }
}

// class yashpal extends yash{
//     protected function __construct(){
//         echo "I am also fine";
//     }
// }


class yashpal extends yash{
    public function __construct(){
        parent::__construct();
        echo "I am also fine";
    }
}

$obj=new yashpal;
?>