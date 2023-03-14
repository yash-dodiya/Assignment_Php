<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <h1 style="color:red">How We Can Implement Animation Effects In Jquery?</h1>
          <ul type="squre" style="color:green;font-size:20px">
           <li>The jQuery animate() method is used to create custom animations.</li>
           <li>$(selector).animate({params},speed,callback);</li>
           <li>The required params parameter defines the CSS properties to be animated.</li>
           <li>The optional speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast",or milliseconds.</li>
           <li>The optional callback parameter is a function to be executed after the animation completes.</li>
          </ul>

          <h2 style="color:purple;font-size:20px">Example</h2>
          <p style="color:green;font-size:20px">$("button").click(function(){<br>
          $("div").animate({left: '250px'});<br>
          }); </p>
</body>
</html>