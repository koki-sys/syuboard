<?php

use Connection;

require './database/connect.php';
                                        
$customerid = $_SESSION['user']['id'];
  $title = $_POST['title'];
  $mtag = $_POST['mtag'];
  $stag = explode(",",$_POST['stag']);


$pdo = Connection\conn();
foreach($stag as $value){
  $query = $pdo->prepare("insert into stag values ('',?)");
  $query->execute([$value]);
}
  

  $query = $pdo->prepare("insert into mtag values('',?,LAST_INSERT_ID())");
  $query->execute([$mtag]);

  $query = $pdo->prepare("insert into board values('',?,?,NULL,LAST_INSERT_ID())");
  $query->execute([$title,$customerid]);

  header('Location:index.php');
?>