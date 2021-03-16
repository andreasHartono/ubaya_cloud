<!DOCTYPE html>
<html>
<head>
	
</head>
</head>
<?php
require_once("database.php");
?>
<body>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>License</th>
    </tr>
    <?php
    $sql = "SELECT * FROM driver ORDER by name ASC";
    $result = $c->query($sql);
    if ($result->num_rows > 0) {

      $drivers = array();
      $i = 0;
      while ($obj = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'.$obj['id'].'</td>';
        echo '<td>'.$obj['name'].'</td>';
        echo '<td>'.$obj['license'].'</td>';
      }
    } else {
      echo "Empty table.";
      die();
    }
    ?>
  </table>
</body>
</html>