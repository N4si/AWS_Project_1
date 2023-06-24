<?php

  echo "<table class='table table-bordered'>";
  echo "<tr><th>Meta-Data</th><th>Value</th></tr>";

  # Get the instance ID from meta-data and print to the screen
  $instance_id = shell_exec('ec2-metadata --instance-id 2> /dev/null | cut -d " " -f 2');
  # if its not set make it 0
  if (empty($instance_id)) {
      $instance_id = 0;
  }
  echo "<tr><td>InstanceId</td><td><i>";
  echo $instance_id;
  "</i></td><tr>";

  # Availability Zone
  $az = shell_exec('ec2-metadata -z 2> /dev/null | cut -d " " -f 2');
  # if its not set make it 0
     if (empty($az)) {
         $az = 0;
  }
  echo "<tr><td>Availability Zone</td><td><i>";
  echo  $az;
  "</i></td><tr>";

  echo "</table>";

?>
