<?php
require_once('db.php');

if (!isset($_GET['id']) || $_GET['id'] == '') {
    header('location:giaovien.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM teachers WHERE id=$id";
$statement = $connect->prepare($sql);
$statement->execute();
$teachers = $statement->fetch();
?>
<form action="suaGV.php" method="POST">

    <input type="hidden" name='id' value="<?= $teachers['id'] ?>">
    <div>
        <div>Nhập lại họ tên:</div>
        <input type="text" placeholder='name' name='name' value="<?= $teachers['name'] ?>">
    </div>
    <div>
        <div>
            Nhập lại Email:
        </div>
        <input type="email" placeholder='email' name='email' value="<?= $teachers['email'] ?>">
    </div>
    <div>
        <div>Nhập lại Phone:</div>
        <input type="text" placeholder='phone' name='phone' value="<?= $teachers['phone'] ?>">
    </div>
    <div>
        <div>Nhập lại Gender:</div>
        <input type="radio" name='gender' value="0" value="<?= $teachers['gender'] ?>">Nu
        <input type="radio" name='gender' value="1" value="<?= $teachers['gender'] ?>">Nam
    </div>
    <div>
        <div>Nhập lại Address:</div>
        <input type="text" placeholder='Address' name='address' value="<?= $teachers['address'] ?>">
    </div>
    <div>
        <div>Nhập lại Date:</div>
        <input type="date" placeholder='Birthday' name='birthday' value="<?= $teachers['birthday'] ?>">
    </div>
    <div>
        <div>Nhập lại Status:</div>
        <input type="radio" name='status' value="0" value="<?= $teachers['status'] ?>">Khong hoat dong
        <input type="radio" name='status' value="1" value="<?= $teachers['status'] ?>">Hoat dong
    </div>
    <div><button>Tạo mới</button>
        <button type="reset">Nhập lại </button>
    </div>
</form>
</form>