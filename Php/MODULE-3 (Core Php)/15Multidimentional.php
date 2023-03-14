<?php


/*  Declare a Multi Dimensioned array of floats called balances having Three
rows and five columns.
*/

$Marks=array(
               "yash"=>array(
                               "Gujrati"=>70,
                               "English"=>60,
                               "Maths"=>80,
               ),
               "yashpal"=>array(
                               "Gujrati"=>80,
                               "English"=>50,
                               "Maths"=>60,                              
               ),
               "Ravi"=>array(
                               "Gujrati"=>60,
                               "English"=>70,
                               "Maths"=>80,
               ),
               "Shakti"=>array(
                               "Gujrati"=>40,
                               "English"=>50,
                               "Maths"=>60,
               ),
               "Mohak"=>array(
                               "Gujrati"=>60,
                               "English"=>50,
                               "Maths"=>70,
               )
               );

echo "<pre>";
print_r($Marks);
echo "</pre>";


// foreach ($Marks as $key => $value) {
//     echo $key."<br>";
//     foreach($value as $value1){
//         echo $value1." ";
//     }
//     echo "<br>";
// }

echo "<table border=2px cellpading='7px' cellspacing='0'>
      <tr>
      <th>Gujrati</th>
      <th>English</th>
      <th>Maths</th>
      </tr>";

foreach($Marks as $key=>$v1){
    echo "<tr>
         <td>$key</td>";
    foreach($v1 as $v2){
        echo "<td>$v2</td>";
    }
    echo "</tr>";
}
   echo "</table>";

?>