<?php
    session_start();
    if( !isset($_SESSION["user"]) ) {
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="room.css"/>
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
        <div class="header_left">Quản lý trọ cho thuê</div>
        <div class="header_right">
          <p>Admin</p>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="main_left">
        <a href="index.php">Dashboard</a>
        <a class="content1" href="room.php">House Type</a>
        <a href="house.php">House</a>
        <a href="renter.php">Tenants</a>
        <a href="baocao.php">Reports</a>
      </div>
      <div class="main_right">
        <div class="body-main">
          <div class="body-title">
            <i class="fa-solid fa-share-nodes"></i>
            <span>Phòng</span>
          </div>
          <div class="body_search">
            <form class="bar_search">
              <div class="ip_btn">
                <input
                  id="btn_search"
                  type="text"
                  placeholder="Tìm kiếm phòng..."
                  required
                />
              </div>
              <div class="btn_sear">
                <button id="btn_search">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  <span id="btn_search" class="btn_search">Tìm kiếm</span>
                </button>
              </div>
              <select class="room_status">
                <option value="roomStatus">Trạng thái phòng</option>
                <option value="rented">Đã cho thuê</option>
                <option value="norent">Chưa cho thuê</option>
              </select>
            </form>
          </div>
          <div class="container">
            <div class="option_setting">
              <a href="#">
                <div class="option add_room">
                  <i class="fa-solid fa-plus"></i>
                  Thêm phòng
                </div>
              </a>
              <!-- <a href="#">
                <div class="option setting_house">
                  <i class="fa-solid fa-tag"></i>
                  Sửa nhà
                </div>
              </a> -->
              <!-- <a href="#">
                <div class="option delete_house">
                  <i class="fa-solid fa-delete-left"></i>
                  Xóa nhà
                </div>
              </a> -->
            </div>
            <div class="box_room">
              <div class="box box1">
                <div class="room_number">
                  <i class="fa-solid fa-house-chimney-window"></i>
                  <span>Phòng 1.01</span>
                </div>
                
                <div class="room_hiring">
                  <i class="fa-solid fa-user"></i>
                  <span>Tiện nghi: 1 phòng ngủ</span>
                </div>
                <div class="room_status_in_box">
                  <i class="fa-solid fa-check"></i>
                  <span>Trạng thái: Trống</span>
                </div>
                <div class="room_money">
                  <i class="fa-solid fa-sack-dollar"></i>
                  <span>1.800.000 VND</span>
                </div>
                <div class="btn_in_container">
                  <div class="room__setting_del">
                    <button class="btnn btn-dele">Xóa</button>
                  </div>
                  <div class="room_option">
                    <button class="btnn btn_check">Trả</button>
                    <!-- <button class="btnn btn_view">Xem</button> -->
                    <button class="btnn btn_fix">Sửa</button>
                  </div>
                </div>
              </div>

              <div class="box box1">
                <div class="room_number">
                  <i class="fa-solid fa-house-chimney-window"></i>
                  <span>Phòng 1.02</span>
                </div>
                <div class="room_hiring">
                  <i class="fa-solid fa-user"></i>
                  <span>Tiện nghi: 2 phòng ngủ</span>
                </div>
                <div class="room_status_in_box">
                  <i class="fa-solid fa-check"></i>
                  <span>Trạng thái: Trống</span>
                </div>
                <div class="room_money">
                  <i class="fa-solid fa-sack-dollar"></i>
                  <span>2.500.000 VND</span>
                </div>
                <div class="btn_in_container">
                  <div class="room__setting_del">
                    <button class="btnn btn-dele">Xóa</button>
                  </div>
                  <div class="room_option">
                    <button class="btnn btn_check">Trả</button>
                    <!-- <button class="btnn btn_view">Xem</button> -->
                    <button class="btnn btn_fix">Sửa</button>
                  </div>
                </div>
              </div>

              <div class="box box_hired">
                <div class="room_number">
                  <i class="fa-solid fa-house-chimney-window"></i>
                  <span>Phòng 1.03</span>
                </div>
                <div class="room_hiring">
                  <i class="fa-solid fa-user"></i>
                  <span>Tiện nghi: 1 phòng ngủ</span>
                </div>
                <div class="room_status_in_box">
                  <i class="fa-solid fa-check"></i>
                  <span>Trạng thái: Trống</span>
                </div>
                <div class="room_money">
                  <i class="fa-solid fa-sack-dollar"></i>
                  <span>1.800.000 VND</span>
                </div>
                <div class="btn_in_container">
                  <div class="room__setting_del">
                    <button class="btnn btn-dele">Xóa</button>
                  </div>
                  <div class="room_option">
                    <button class="btnn btn_check">Trả</button>
                    <!-- <button class="btnn btn_view">Xem</button> -->
                    <button class="btnn btn_fix">Sửa</button>
                  </div>
                </div>
              </div>

              <div class="box box_hired">
                <div class="room_number">
                  <i class="fa-solid fa-house-chimney-window"></i>
                  <span>Phòng 1.04</span>
                </div>
                <div class="room_hiring">
                  <i class="fa-solid fa-user"></i>
                  <span>Tiện nghi: 2 phòng ngủ</span>
                </div>
                <div class="room_status_in_box">
                  <i class="fa-solid fa-check"></i>
                  <span>Trạng thái: Trống</span>
                </div>
                <div class="room_money">
                  <i class="fa-solid fa-sack-dollar"></i>
                  <span>2.500.000 VND</span>
                </div>
                <div class="btn_in_container">
                  <div class="room__setting_del">
                    <button class="btnn btn-dele">Xóa</button>
                  </div>
                  <div class="room_option">
                    <button class="btnn btn_check">Trả</button>
                    <!-- <button class="btnn btn_view">Xem</button> -->
                    <button class="btnn btn_fix">Sửa</button>
                  </div>
                </div>
              </div>
              <div class="box box_hired">
                <div class="room_number">
                  <i class="fa-solid fa-house-chimney-window"></i>
                  <span>Phòng 1.04</span>
                </div>
                
                <div class="room_hiring">
                  <i class="fa-solid fa-user"></i>
                  <span>Tiện nghi: 1 phòng ngủ</span>
                </div>
                <div class="room_status_in_box">
                  <i class="fa-solid fa-check"></i>
                  <span>Trạng thái: Trống</span>
                </div>
                <div class="room_money">
                  <i class="fa-solid fa-sack-dollar"></i>
                  <span>1.800.000 VND</span>
                </div>
                <div class="btn_in_container">
                  <div class="room__setting_del">
                    <button class="btnn btn-dele">Xóa</button>
                  </div>
                  <div class="room_option">
                    <button class="btnn btn_check">Trả</button>
                    <!-- <button class="btnn btn_view">Xem</button> -->
                    <button class="btnn btn_fix">Sửa</button>
                  </div>
                </div>
              </div>
              <div class="box box_hired">
                <div class="room_number">
                  <i class="fa-solid fa-house-chimney-window"></i>
                  <span>Phòng 1.04</span>
                </div>
                
                <div class="room_hiring">
                  <i class="fa-solid fa-user"></i>
                  <span>Tiện nghi: 2 phòng ngủ</span>
                </div>
                <div class="room_status_in_box">
                  <i class="fa-solid fa-check"></i>
                  <span>Trạng thái: Trống</span>
                </div>
                <div class="room_money">
                  <i class="fa-solid fa-sack-dollar"></i>
                  <span>2.500.000 VND</span>
                </div>
                <div class="btn_in_container">
                  <div class="room__setting_del">
                    <button class="btnn btn-dele">Xóa</button>
                  </div>
                  <div class="room_option">
                    <button class="btnn btn_check">Trả</button>
                    <!-- <button class="btnn btn_view">Xem</button> -->
                    <button class="btnn btn_fix">Sửa</button>
                  </div>
                </div>
              </div>
              <div class="box box_hired">
                <div class="room_number">
                  <i class="fa-solid fa-house-chimney-window"></i>
                  <span>Phòng 1.04</span>
                </div>
                
                <div class="room_hiring">
                  <i class="fa-solid fa-user"></i>
                  <span>Tiện nghi: 1 phòng ngủ</span>
                </div>
                <div class="room_status_in_box">
                  <i class="fa-solid fa-check"></i>
                  <span>Trạng thái: Trống</span>
                </div>
                <div class="room_money">
                  <i class="fa-solid fa-sack-dollar"></i>
                  <span>1.800.000 VND</span>
                </div>
                <div class="btn_in_container">
                  <div class="room__setting_del">
                    <button class="btnn btn-dele">Xóa</button>
                  </div>
                  <div class="room_option">
                    <button class="btnn btn_check">Trả</button>
                    <!-- <button class="btnn btn_view">Xem</button> -->
                    <button class="btnn btn_fix">Sửa</button>
                  </div>
                </div>
              </div>

              <div class="box box1">
                <div class="room_number">
                  <i class="fa-solid fa-house-chimney-window"></i>
                  <span>Phòng 1.04</span>
                </div>
                
                <div class="room_hiring">
                  <i class="fa-solid fa-user"></i>
                  <span>Tiện nghi: 2 phòng ngủ</span>
                </div>
                <div class="room_status_in_box">
                  <i class="fa-solid fa-check"></i>
                  <span>Trạng thái: Trống</span>
                </div>
                <div class="room_money">
                  <i class="fa-solid fa-sack-dollar"></i>
                  <span>2.500.000 VND</span>
                </div>
                <div class="btn_in_container">
                  <div class="room__setting_del">
                    <button class="btnn btn-dele">Xóa</button>
                  </div>
                  <div class="room_option">
                    <button class="btnn btn_check">Trả</button>
                    <!-- <button class="btnn btn_view">Xem</button> -->
                    <button class="btnn btn_fix">Sửa</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>