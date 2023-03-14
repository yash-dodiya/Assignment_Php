<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>TABLE DESIGN CHANGE</title>
       <style>
                    td,
          th {
          border: 1px solid rgb(190, 190, 190);
          padding: 10px;
          }

          td {
          text-align: center;
          }

          tr:nth-child(even) {
          background-color: #eee;
          }

          th[scope='col'] {
          background-color: #696969;
          color: #fff;
          }

          th[scope='row'] {
          background-color: #d7d9f2;
          }

          caption {
          padding: 10px;
          caption-side: bottom;
          }

          table {
          border-collapse: collapse;
          border: 2px solid rgb(200, 200, 200);
          letter-spacing: 1px;
          font-family: sans-serif;
          font-size: 0.8rem;
          }

          </style>   
</head>
<body>
<h1 style="color:red;">Design change the color of even <tr>elements to green and change the color off odd
          <tr>element to blue color?give an example code</h1>

     <table>
          <caption> Align football stars</caption>
          <tr>
              <th scope="col">player</th>
              <th scope="col">Gloobles</th>
              <th scope="col">za'taak</th>
          </tr>
          <tr>
              <th scope="row">Tr-7</th>
              <td>7</td>
              <td>4,569</td>
           </tr>
          <tr>
              <th scope="row">Khiresh Odo</th>
              <td>7</td>
              <td>7,223</td>
           </tr>
          <tr>
              <th scope="row">Mia Oolong</th>
              <td>9</td>
              <td>6,219</td>
           </tr>
     </table>
</body>
</html>