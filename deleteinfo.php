<?php
    //session_start();
    if(!empty($_POST)) {
        $id = $_POST['id'];
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
        $query = "delete from student where ID = $id";

        mysqli_query($connect, $query);
        //dong ket noi de khong bi loi 
        //$connect->close();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> delete </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <h1><center> Xóa ID </center></h1><br>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="number" class="form-control" name="id">
            <button type="submit" class="btn btn-default">
            Delete</button>
        </form>    
    </div>
    <a href="register.php">Quay trở lại</a><br>
</body>
</html>