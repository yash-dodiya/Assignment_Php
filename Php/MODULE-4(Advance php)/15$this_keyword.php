
<?php
class Fruit {
  public $name;
}
$apple = new Fruit();
$apple->name = "Apple";

echo $apple->name;
?>
<?php
class yash{
    public $a,$b;
}
$obj=new yash;
$obj->sum=10;

echo $obj->sum;





?>
<h2> Use of The $this keyword </h2>
<p>--->The this keyword refers to the current object in a method or constructor.
     The most common use of the this keyword is to eliminate the confusion between
     class attributes and parameters with the same name (because a class attribute 
     is shadowed by a method or constructor parameter).</p>