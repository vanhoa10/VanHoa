<?php
include_once 'connect_db.php';
if (count($_POST) > 0) {
    mysqli_query($connect, "UPDATE student set id='" . $_POST['id'] . "', fullname='" . $_POST['fullname'] . "', 
    username='" . $_POST['username'] . "', password='" . $_POST['password'] . "' ,phone='" . $_POST['phone'] . "' 
    WHERE id='" . $_POST['id'] . "'");
    $message = "Cập nhật thành công";
    //sau khi cap nhat
}
//$result = mysqli_query($connect, "SELECT * FROM student WHERE id ='" . $_GET['id'] . "'");
//$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title> update </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>
        <center> CHỈNH SỬA THÔNG TIN </center>
    </h1>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="number" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="fullname">Họ và tên:</label>
                <input type="text" class="form-control" name="fullname">
            </div>
            <div class="form-group">
                <label for="username">Ten đăng nhập:</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="number" class="form-control" name="phone">
            </div>
            <button type="submit" class="btn btn-default">Confirm</button>
        </form>
        <br><a href="register.php">Quay trở lại</a></br>
    </div>
</body>

</html>