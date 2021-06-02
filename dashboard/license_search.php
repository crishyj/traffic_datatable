<?php
  require '../include/config.php';

  extract($_REQUEST);
  $query = "select * from security_traffic_log where vehicle_license like '{$term}%'";
  
  $result = mysqli_query($conn,$query);
  $r = array();
  while ($row = $result -> fetch_row())
  {
    $ro = new stdClass();
    $ro->id = $row[0];
    $ro->label = $row[4];
    $ro->value = $row[4];
    $ro->meta = $row;
    $r[] = $ro;
    
  }
  echo json_encode($r);

  

?>