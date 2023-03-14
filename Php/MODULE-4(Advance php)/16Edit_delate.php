<?php

/* Consider the exercise11and add a edit link near delete link e.g. Clicking up on edit
button a particular row should be open in */



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<table>
     <thead height="20px" rowspan="2px" width="400px">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>                    
    </thead>
    <tbody>
        <tr>
            <td>yash</td>
            <td>yash1@gmail.com</td>
            <td width="2px" height="20px" collspan="2px">
                <button onclick="Editrow(this)">Edit</button>
               <td> <button onclick="delaterow(this)">Delate</button></td>
            </td>
        </tr>
        <tr>
            <td>yashpal</td>
            <td>yashpal1@gmail.com</td>
            <td width="2px" height="20px">
                <button onclick="Editrow(this)">Edit</button>
                <td><button onclick="delaterow(this)">Delate</button></td>
            </td>
        </tr>
    </tbody>
</table>
                        
</body>
</html>