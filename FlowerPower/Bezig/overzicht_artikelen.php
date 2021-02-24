<?php 

include_once 'sidebar.php'

include 'database.php';

$db = new database();
$winkels = $db->select("SELECT * FROM winkel", []);

// [[0]=>['winkelcode'=>1, 'winkelnaam'=>bloemist & bosman, 'postcode'=>1234AB], [1]=>['winkelcode'=>2, 'winkelnaam'=>bloemist & bosman, 'postcode'=>1234AB]

$columns = array_keys($winkels[0]);
$row_data = array_values($winkels);

?>

       <table>
         <tr>
            <?php 
               foreach($columns as $column){ 
                   echo "<th><strong> $column </strong></th>";
               }
               ?>
            <th colspan="2">Action</th>
            {
         </tr>
         <?php
            foreach($row_data as $rows){
                echo "<tr>";
                foreach($rows as $data){
                 echo "<td>$data</td>";
            }
            echo "<td>";
            echo "<a href=$data>Edit</a>";
            echo "</tr>";
            echo "<tr>";
            }
            ?>
      </table>
      <a href="http://"></a>
   </body>
</html>