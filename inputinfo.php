<?php
    //session_start();
    if(!empty($_POST)) {
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        //tao ket noi 
        require_once("connect_db.php");
        //luu php bang unicode
        //mysql_set_charset($connect, "utf8");
        //kiem tra 
        if($connect->connect_error) {
            var_dump($connect->connect_error);
            die();
        }
        //insert data 
        $query = "insert into student(id, fullname, username, password, phone) 
        value ('".$id."','".$fullname."','".$username."','".$password."','".$phone."')";

        mysqli_query($connect, $query);
        //dong ket noi de khong bi loi 
        //$connect->close();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> register </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <h1><center> ĐĂNG KÍ THÔNG TIN </center></h1> 
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
            <button type="submit" class="btn btn-default">
            Register</button>
        </form>    
        <br><a href="register.php">Quay trở lại</a></br>
    </div>
</body>
</html>