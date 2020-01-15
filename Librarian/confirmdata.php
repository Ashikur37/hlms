<?php
include_once('../db/run.php');
$gerId=$_GET['id'];
$sql= "UPDATE book_issue SET status=1 where id=$gerId";
$query= mysqli_query($con,$sql);
header('location: confirm.php');

?>