<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <h3>Đăng ký</h3>
    <form action="register_submit.php" method="post">
        <table>
            <tr>
                <td>Tên đăng nhập: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu: </td>
                <td><input type="password" name="repassword"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Đăng ký</button>
                    <button type="reset">Làm mới</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>