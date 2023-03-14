<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What is Overloding</title>
</head>
<body>
    <h3>What is Overloding ?</h3>
    <p>------------->Function overloading in PHP is used to dynamically create properties and methods. 
        These dynamic entities are processed by magic methods which can be used in a class for various action types.
        Function overloading contains same function name and that function performs different task according to number of arguments</p>

    <h2> Example Overloding </h2>
    <p>-----> example, find the area of certain shapes where radius are given then it should return area of circle
         if height and width are given then it should give area of rectangle and others.
         Like other OOP languages function overloading can not be done by native approach.
         In PHP function overloading is done with the help of magic function __call().
         This function takes function name and arguments. </p>
</body>
</html>