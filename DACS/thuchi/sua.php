<?php
    $id = $_GET['id'];


    $sql_up = "SELECT * FROM finance where id = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $description = $_POST['description'];
        $date = $_POST['date'];
        $price = $_POST['price'];
        $sql = "UPDATE finance SET r_price = '$price', r_date = '$date', r_description = '$description' WHERE id = $id";
        $query = mysqli_query($connect, $sql);
        header('location: baocao.php?page_layout=danhsach');
    }
?>

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
            <a href="index.php">Dashboard</a>
            <a href="room.php">House Type</a>
            <a href="house.php">House</a>
            <a href="renter.php">Tenants</a>
            <a class="content1"  href="baocao.php">Reports</a>
        </div>
        <div class="main_right">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h2><i class="fa-solid fa-house"></i> Sửa phòng</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Mô tả <i class="fa-solid fa-hashtag"></i></label>
                                <input type="text" name="description" class="form-control" required value="<?php echo $row_up['r_description']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Ngày <i class="fa-solid fa-calendar-days"></i></label>
                                <input type="text" name="date" class="form-control" required value="<?php echo $row_up['r_date']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Giá <i class="fa-solid fa-money-bill"></i></label>
                                <input type="number" name="price" class="form-control" required value="<?php echo $row_up['r_price']; ?>">
                            </div>
                           
                            <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>