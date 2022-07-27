<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tao giáo viên</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            margin: auto;
            text-align: center;
        }
        div{
            margin-top: 10px;
        }
        input:hover{
            background-color: aqua;
        }
        button:hover{
            background-color: red;
        }
        button{
            border-radius: 8px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="taoGV.php" method="POST">
        <div>
            <label for="">Tên giáo viên</label>
            <input type="text" name='name'>
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name='email'>
        </div>
        <div>
            <label for="">Phone</label>
            <input type="int" name='phone'>
        </div>
        <div>
            <label for="">Giới tính</label>
            <input type="radio" name='gender' value="0" checked>Nữ
            <input type="radio" name='gender' value="1">Nam 
        </div>
        <div>
            <label for="">Địa chỉ</label>
            <input type="text" name='address'>
        </div>
        <div>
            <label for="">Ngày sinh</label>
            <input type="date" name='birthday'>
        </div>
        <div>
            <label for="">Trạng thái</label>
            <input type="radio" name='status' value='0'>Không hoạt động
            <input type="radio" name='status' value='1' checked>Hoạt động
        </div>
        <div>
            <button>Tao mới</button>
            <button type="reset">Nhâp lại</button>
        </div>
    </form>
</body>
</html>