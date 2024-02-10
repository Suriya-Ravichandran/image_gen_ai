<?php
$table = 11;
$rows = 101;
$i=1;
?>

<table>
        <tr>
          <th>Multiplicant</th>
          <th>Multiplier</th>
          <th>Result</th>
        </tr>
        <?php
            for($i=1;$i<$rows;$i++){ 
        ?>
        <tr>
          <td><?php echo $table ?></td>
          <td><?php echo $i ?></td>
          <td><?php echo $i*$table?></td>
        </tr>
        <?php
        }
        ?>
      </table>