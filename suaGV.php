<?php

require_once('db.php');

$id = isset($_POST['id']) ? $_POST['id'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$birthday = isset($_POST['birthday']) ? $_POST['birthday'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
if (!$id) {
    header('location: formeditGV.php');
}
$sql = "UPDATE teachers "
    . "SET name='$name', email='$email',phone='$phone',gender='$gender',address='$address',birthday='$birthday',status='$status' "
    . "WHERE id=$id";
var_dump($sql);
$statement = $connect->prepare($sql);
$statement->execute();
header('location: giaovien.php');