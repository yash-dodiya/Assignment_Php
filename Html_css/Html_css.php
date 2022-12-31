<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {

      /* text-align: center; */
      font-size: 20px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
 
    /* input[type="Text"] , input [type="email"] ,input[type="textarea"] ,input[type="number"]{width: 40%;} */
    
    form {
      padding: 0 10px;
      border: 2px solid;
      width: 60%;
      margin: 0 auto;
      border-radius: 10px;
      background-color:rgb(31, 113, 113);
      width: 50%;
    }
    .col-md-4{
      background-color: rgba(255, 255, 255, 0.492);
    margin: 10px 0;
    padding: 10px;
    border: 1px solid white ;
    border-radius: 10px;
    display: flex;
    }
    .col-md-4 label{
      width: 150px;
      /* display: inline-block; */
    }
    .col-md-4 input{
      display: block;
      width: 330px;
      padding: 8px 10px;
     margin-left: 30px;
      padding: 8px 10px;
       border-radius: 8px;
    }
    button{
      text-align: center;
      padding: 10px 30px;
      border-radius: 10px;
      background-color: gray;
    }
    .bt{
      text-align: center;
    }.center{
      text-align:left;
    }
    .spd{
      width:40%
    }
  </style>
</head>

<body> 
  <form class="row g-3 needs-validation center" novalidate >
    <h2>step 1: your details</h2>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label"  >Name</label>
      <input type="text" class="form-control" style="" id="validationCustom01" placeholder="Enter your name"  required >
      
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Email-id</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="example1@gmail.com" required="">
      
      </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Phone</label>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
        required size="50%">
      <div class="invalid-feedback">
      </div>
    </div>

    <h2>step 2:Delivery address</h2>

    <div class="col-md-4">
      <lable for="address" class="form-lable" id="lebal">Address</lable>
      <input type="textarea" style="margin-left:120px ;" name="Address" id="Address">
    </div>


    <div class="col-md-4">
      <label for="post-code" class="form-">post-code</label>
      <input type="number" name="number" id="number" class="int1">
    </div>

    <div class="col-md-4">
      <label for="contry" class="form">contry</label>
      <input type="text" name="text" id="text" size="30px" class="int2" class="spd">
    </div>
    <br>

    <h3>step 3:card-details</h3>
    <div class="col-md-4">
      <label for="card-type" class="form">cardtype</label>
      <br>

      <input type="radio" id="visa" name="visa" value="visa">visa
      <input type="radio" id="Amex" name="Amex" value="visa">Amex
      <input type="radio" id="Mastercard" name="Mastercard" value="visa">Mastercard
    </div>
    <div class="col-md-4">
      <label for="cardnumber" class="form">cardnumber</label>
      <input type="number" name="number" id="number" value="cardnumber" class="int3"class="spd">

    </div>
    <div class="col-md-4">
      <label for="security code" class="form">security code</label>
      <input type="number" name="number" id="number" value="security code" class="int4" class="spd">
    </div>

    <div class="col-md-4">
      <label for="Name on card" class="form" align="left">Name on Card</label>
      <input type="text" name="text" id="name" value="Name on Card" class="spd" align="right"> 

    </div> 
    <div class="col-md-4">
      <label for="button"align="left" class="form">Buy It!</label>
      <input type="" class="spd" align="right">
    </div>
    <div class="bt">
      <button>buy it!</button>

    </div>
  

</body>

</html>