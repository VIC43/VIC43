<?php
 include('config.php');
 $data= mysqli_query($connection, "SELECT * FROM appointment")or die(mysqli_error($connection));
 while($row=mysqli_fetch_array($data));
 {
 echo "{$row['form']}";
 }
 ?>