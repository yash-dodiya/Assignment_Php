<?php

/*   Create multiple Traits and use it in to a single class?  */

Trait information{
     function hello(){
        echo "Hello how are you<br>";
     }
}
Trait Accept{
     function hey(){
        echo "Hey i am also fine<br>";
     }
}
Trait went{
     function Go(){
        echo "Tata Bye Bye<br><br>";
     }
}

class yash{
    use information;
    use Accept;
    use went;
    public function want(){
        echo "This is multiple Trait and single class use:";
    }
}

$obj=new yash;
$obj->hello();
$obj->hey();
$obj->Go();
$obj->want();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trait</title>
</head>
<body>
    <h3>** Trait Informtion **</h3>
    <h4>------->PHP implements a way to reuse code called Traits.</h4>
    <p>-------->Traits are a mechanism for code reuse in single inheritance languages such as PHP. 
        A Trait is intended to reduce some limitations of single inheritance by enabling 
        a developer to reuse sets of methods freely in several independent classes living 
        in different class hierarchies. The semantics of the combination of Traits and classes 
        is defined in a way which reduces complexity, and avoids the typical problems 
        associated with multiple inheritance and Mixins</p>
</body>
</html>