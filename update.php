<?php

$id = $_GET['id'];

$name=$_POST['name'];
$text=$_POST['text'];
$price=$_POST['price'];



$update =$pdo->query("UPDATE product SET  WHERE id='".$id."'");