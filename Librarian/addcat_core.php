<?php
require_once('../db/run.php');

if(isset($_REQUEST['btn_sub'])){
    dataInsert('catagory',array($_REQUEST['name'])); 
    header('location: addcat.php');
  }


?>