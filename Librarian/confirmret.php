<?php
include_once('../db/run.php');
$id=$_GET["id"];
$sql="update book_issue set return_date=sysdate() where id=".$id;
mysqli_query($con,$sql);
header("location:borrowlist.php");
?>