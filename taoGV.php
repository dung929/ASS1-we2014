<?php
require_once('db.php');

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$birthday = isset($_POST['birthday']) ? $_POST['birthday'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';

$sql = 'INSERT INTO teachers '
    . "(name,email,phone,gender,address,birthday,status)"
    . "VALUES('$name','$email','$phone','$gender','$address','$birthday','$status')";

$statement = $connect->prepare($sql);

$statement->execute();

header('location:giaovien.php');
