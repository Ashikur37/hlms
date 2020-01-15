<?php 
session_start();
include_once('../db/run.php');

$bookId=$_GET['bookid'];
$getId=$_SESSION["user"]["id"];

$sql= "INSERT INTO book_issue (user_id,book_id,status,pending) VALUES ('$getId','$bookId',0,1)";
$query=mysqli_query($con,$sql);

$newsql= "UPDATE books SET pending=1 WHERE id=$bookId";
$query=mysqli_query($con,$newsql);

header('location: myborrow.php');





?>