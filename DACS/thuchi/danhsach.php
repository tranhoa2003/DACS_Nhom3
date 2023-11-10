<?php
    $sql = "SELECT * FROM house_type";
    $query = mysqli_query($connect, $sql);
    $sql1 = "SELECT * FROM finance";
    $query1 = mysqli_query($connect, $sql1);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồ án</title>
    <link rel="stylesheet" href="style.css">
    <script src="baocao.js"></script>
    <style>
        .test{
            border: #15B5C1 1px solid;
            padding: 0.5rem;
            background-color: #b2faff;
            margin-left: -7px;
            text-decoration: none;
            color: black;
        }
        .test:hover{
            border: #F16276 1px solid;
            background-color: #f6b9c2;
        }
    </style>
</head>
<body>
    <div id="header">
        <div class="header_1">
            <div class="header_left">
                Quản lý trọ cho thuê
            </div>
            <div class="header_right">
                <p class="admin-label" id="adminLabel">Admin</p>
                <a class="logout-link" id="logoutLink" href="login.php">Log out</a>
                <a class="login-link" id="loginLink" href="index.php">Login</a>
            </div>
            <script>
                var isLoggedIn = <?php echo isset($_SESSION["user"]) ? 'true' : 'false'; ?>;
                var adminLabel = document.getElementById("adminLabel");
                var logoutLink = document.getElementById("logoutLink");
                var loginLink = document.getElementById("loginLink");

                // Tùy chỉnh hiển thị ban đầu dựa trên trạng thái đăng nhập
                if (isLoggedIn) {
                    logoutLink.style.display = "none"; // Ẩn nút "Log out" ban đầu
                    loginLink.style.display = "none"; // Ẩn nút "Login" ban đầu
                } else {
                    logoutLink.style.display = "none"; // Ẩn nút "Log out" ban đầu
                    loginLink.style.display = "inline"; // Hiển thị nút "Login" ban đầu
                }

                // Xử lý sự kiện click trên "Admin"
                adminLabel.addEventListener("click", function () {
                    if (isLoggedIn) {
                        // Nếu đã đăng nhập, hiển thị "Log out"
                        logoutLink.style.display = "inline";
                        loginLink.style.display = "none";
                    } else {
                        // Nếu chưa đăng nhập, chuyển người dùng đến trang đăng nhập (Login)
                        window.location.href = "index.php";
                    }
                });

                // Xử lý sự kiện khi di chuyển chuột ra khỏi "Log out"
                logoutLink.addEventListener("mouseout", function () {
                    logoutLink.style.display = "none"; // Ẩn nút "Log out" khi di chuyển chuột ra khỏi nó
                });
            </script>
        </div>
    </div>
    <div class="main">
        <div class="main_left">
            <a href="index.php">Dashboard</a>
            <a href="room.php">House Type</a>
            <a href="house.php">House</a>
            <a href="renter.php">Tenants</a>
            <a class="content1" href="baocao.php">Reports</a>
        </div>
        <div class="main_right">
            <div class="main_manager" style="height: auto;">
                <div class="main_manager_frame" >
                    <section>
                        <h2>Báo cáo tình trạng phòng trọ</h2>
                        <table id="roomStatusTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Số phòng</th>
                                    <th>Tình trạng phòng</th>
                                    <th>Giá thuê</th>
                                    <th>Tiện nghi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                                while($row = mysqli_fetch_assoc($query)){?>
                                    <tr>
                                        <td><?php echo $i++?></td>
                                        <td><?php echo $row['r_number']; ?></td>
                                        <td><?php echo $row['r_condition']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        <td><?php echo $row['convenient']; ?></td>
                                    </tr>
                                <?php } 
                            ?>
                            </tbody>
                        </table>
                        <form action="export_ttphong.php" method = "post">
                            <input type="submit" name="export_ttphong" value = "Xuất báo cáo" >
                        </form>
                    </section>
                    
                    <section>
                        <h2>Báo cáo thu chi</h2>
                        <table id="financialReportTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Mô tả</th>
                                    <th>Ngày</th>
                                    <th>Giá</th>
                                    <th>Sửa</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                    $i = 1;
                                    while($row = mysqli_fetch_assoc($query1)){?>
                                        <tr>
                                            <td><?php echo $i++?></td>
                                            <td><?php echo $row['r_description']; ?></td>
                                            <td><?php echo $row['r_date']; ?></td>
                                            <td><?php echo $row['r_price']; ?></td>
                                            <td>
                                                <a class="test" href="baocao.php?page_layout=sua&id=<?php echo $row['id']; ?>">Sửa</a>
                                            </td>
                                            <td>
                                                <a class="test" onclick="return confirm('Bạn có chắc chắn muốn xoá ?')" href="baocao.php?page_layout=xoa&id=<?php echo $row['id']; ?>">Xoá</a>
                                            </td>

                                        </tr>
                                    <?php } 
                                ?> 
                            </tbody>
                        </table>
                        <a class="btn btn-primary" href="baocao.php?page_layout=them">Thêm mới</a>
                        <form action="export_thuchi.php" method = "post">
                            <input type="submit" name="export_thuchi" value = "Xuất báo cáo" >
                        </form>
                    </section>
                    
                    <!-- <section> -->
                        <!-- <h2>Các thống kê khác</h2> -->
                        <!-- Thêm các thông tin thống kê khác -->
                    <!-- </section> -->
                    
                    <!-- <button onclick="generateReports()">Tạo báo cáo</button> -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>