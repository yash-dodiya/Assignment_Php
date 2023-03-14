<?php


class yash{
    public function parent(){
        echo "this is a parent<br>";
        static::child();
    }
}
class yashpal extends yash{
    public function child(){
        echo "this is a child";
    }
}
$obj=new yashpal;
$obj->parent();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megic_method</title>
</head>
<body>
    <h2>What are PHP Magic Methods/Functions? List them Write program for Static
Keyword in PHP? </h2>
<ul type="squar">
    <li>__construct()</li>
    <li>__destruct()</li>
    <li>__call()</li>
    <li>__callstatic()</li>
    <li>__get()</li>
    <li>__set()</li>
    <li>__isset()</li>
    <li>__unset()</li>
    <li>__sleep</li>
    <li>__wakeup</li>
    <li>__serialize()</li>
    <li>__unserialize()</li>
    <li>__tostring</li>
    <li>__invoke</li>
    <li>__set_state()</li>
    <li>__clone</li>
    <li>and__debuginfo()</li>
</body>
</html>