<?php
require_once('db.php');

$sql = 'SELECT * FROM teachers';

$statement = $connect->prepare($sql);

$statement->execute();

$teachers = $statement->fetchALL();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach giao vien</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="text-center">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Birthday</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teachers as $key => $value) : ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td><?= $value['phone'] ?></td>
                        <td><?= $value['gender'] ?> (0:Nữ/ 1:Nam)</td>
                        <td><?= $value['address'] ?></td>
                        <td><?= $value['birthday'] ?></td>
                        <td><?= $value['status'] ?> (0:Không hoạt động/ 1:Hoạt động)</td>
                        <td>
                            <a href="xoaGV.php ?id=<?= $value['id'] ?>">
                                <button class="border - 1 p-4 bg-blue-200 hover:bg-red-200">Xoa giao vien</button>
                            </a>
                        </td>
                        <td>
                            <a href="formeditGV.php ?id=<?= $value['id'] ?>">
                                <button class="border - 1 p-4 bg-blue-200 hover:bg-red-200">Chinh sua giao vien</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div>
        <a href="formtaoGV.php ?id=<?= $value['id'] ?>">
            <button class="border - 1 p-4 bg-blue-200 hover:bg-red-200">Tao moi</button>
        </a>
    </div>
</body>

</html>