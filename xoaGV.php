<?php
require_once('db.php');

$id = $_GET['id'];

$sql = "DELETE FROM teachers WHERE id = $id";

var_dump($id,$sql);

$statement = $connect ->prepare($sql);

$statement -> execute();
 header('location:giaovien.php');