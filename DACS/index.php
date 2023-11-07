
<?php
    session_start();
    if( !isset($_SESSION["user"]) ) {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồ án</title>
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>
    <div id="header">
        <div class="header_1">
            <div class="header_left">
                Quản lý trọ cho thuê
            </div>
            <div class="header_right">
                <p>Admin</p>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="main_left">
            <a class="content1" href="index.php">Dashboard</a>
            <a href="room.php">House Type</a>
            <a href="house.php">House</a>
            <a href="renter.php">Tenants</a>
            <a href="baocao.php">Reports</a>
        </div>
        <div class="main_right">
            <div class="main_manager">
                <div class="main_manager_frame">
                    <div class="main_manager_top" style="font-weight: bold;">
                        <p>Welcome back Admin</p>
                    </div>
                    <div class="main_manager_bottom">
                        <div class="main_content">
                            <div class="main_content1">
                                <i class="fa-solid fa-house"></i>
                                <p>Houses</p>
                            </div>
                            <div class="main_content2">
                                <p><a href="house.php">view</a></p>
                            </div>
                        </div>
                        <div class="main_content">
                            <div class="main_content1">
                                <i class="fa-solid fa-user"></i>
                                <p>Tenants</p>
                            </div>
                            <div class="main_content2">
                                <p><a href="renter.php">view</a></p>
                            </div>
                        </div>
                        <div class="main_content">
                            <div class="main_content1">
                                <i class="fa-solid fa-file"></i>
                                <p>Reports</p>
                            </div>
                            <div class="main_content2">
                                <p><a href="baocao.php">view</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>