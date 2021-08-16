<?php 
include('config.php');
$id=$_POST['id'];
$username=$_POST['username'];
$form=$_POST['form'];

$insertq="INSERT INTO appointment(id, username, form, date) VALUES('$id','$username','$form', NOW())";

$result=mysqli_query($connection, $insertq)or die(mysqli_error($connection));

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