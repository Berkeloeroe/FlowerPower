<?php 

include_once '../sidebars/medewerker.php'

include 'database.php';

$db = new database();
$artikelen = $db->select("SELECT * FROM artikel", []);

$columns = array_keys($artikelen[0]);
$row_data = array_values($artikelen);
print_r($row_data);

?>

       <table>
            <tr>
                <?php
                    foreach($columns as $column){
                        echo "<td><strong>$column</strong></td>";
                    }
                ?>
                <th colspan="2">action</th>
            </tr>
            <?php  
                foreach($row_data as $rows){
                    $artikelcode = $rows['artikelcode'];
                    echo "<tr>";
                    foreach($rows as $data){
                        echo "<td>$data</td>";
                    }
                    echo "<td>";
                    echo "<a href=edit_artikel.php?artikel_id=$artikelcode>Edit</a>";
                    echo "</td>";
                    echo "<tr>";
                }
                // [['leukeitle']=>['winkelcode'=>1,'title'=>'something'], [1]=>['winkelcode'=>1,'title'=>'something']]
            ?>
        </table>
      <a href="http://"></a>
   </body>
</html>