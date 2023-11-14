<?php
    $sql = "SELECT * FROM house_type";
    $query = mysqli_query($connect, $sql);
    $sql1 = "SELECT * FROM finance";
    $query1 = mysqli_query($connect, $sql1);
    
    $sql2 = "SELECT * FROM house";
    $query2 = mysqli_query($connect, $sql2);
    $sql3 = "SELECT * FROM tenants";
    $query3 = mysqli_query($connect, $sql3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồ án</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="baocao.css">
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
        /* .section_form{
            display: flex;
        } */
        .form-section{
            display: flex; 
            justify-content: space-between;
            align-items: center;
        }

        .export{
            border:none; background-color: #C0C0C0; border-radius: 5px; padding: 5px 10px 5px 10px;
        }
        .export:hover{
            background-color: #DDDDDD;
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
                        <div class="form-section">
                            <h2>Báo cáo tình trạng phòng</h2>
                            <form action="export_ttphong.php" method = "post">
                                <input class="export" type="submit" name="export_ttphong" value = "Xuất báo cáo" >
                            </form>
                        </div>
                        <table id="roomStatusTable" class="table">
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
                    </section>

                    <section>
                        <div class="form-section">
                            <h2>Báo cáo danh sách phòng</h2>
                            <form action="export_dsphong.php" method = "post">
                            <input class="export" type="submit" name="export_dsphong" value = "Xuất báo cáo" >
                        </form> 
                        </div>
                        <table id="roomStatusTable" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Số phòng</th>
                                    <th>Ngày hợp đồng</th>
                                    <th>Tiền cọc</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                                while($row = mysqli_fetch_assoc($query2)){?>
                                    <tr>
                                        <td><?php echo $i++?></td>
                                        <td><?php echo $row['r_number']; ?></td>
                                        <td><?php echo $row['d_contract']; ?></td>
                                        <td><?php echo $row['deposits']; ?></td>
                                    </tr>
                                <?php } 
                            ?>
                            </tbody>
                        </table>
                    </section>

                    <section>
                        <div class="form-section">
                            <h2>Báo cáo người thuê</h2>
                            <form action="export_ntphong.php" method = "post">
                                <input class="export" type="submit" name="export_ntphong" value = "Xuất báo cáo" >
                            </form>
                        </div>
                        <table id="roomStatusTable" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Họ và tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Số phòng</th>
                                    <th>Số tiền thuê</th>
                                    <th>Hạn thuê</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                                while($row = mysqli_fetch_assoc($query3)){?>
                                    <tr>
                                        <td><?php echo $i++?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['r_number']; ?></td>
                                        <td><?php echo $row['r_amount']; ?></td>
                                        <td><?php echo $row['co_date']; ?></td>
                                    </tr>
                                <?php } 
                            ?>
                            </tbody>
                        </table>
                    </section>
                    
                    <section>
                        <div class="form-section">
                            <h2>Báo cáo thu chi</h2>
                            <form action="export_thuchi.php" method = "post">
                                <input class="export" type="submit" name="export_thuchi" value = "Xuất báo cáo" >
                            </form>
                        </div>
                        <table id="financialReportTable" class="table">
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