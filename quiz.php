<?php
include('config.php');
$feelings=$_POST['feelings'];
$symptoms=$_POST['symptoms'];
$period=$_POST['period'];

$insert_q="INSERT INTO quiz(feelings, symptoms, period, time) VALUES('$feelings','$symptoms','$period', NOW())";
$result=mysqli_query($connection, $insert_q)or die(mysqli_error($connection));

if($result)
{
echo "
<script>
alert('data inserted');
window.location.href='index.html' 
</script>
";
}
else
{
echo "
<script>
alert('data not inserted pls check errors');
</script>
";

}


?>