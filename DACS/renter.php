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
    <title>Quản lý người thuê trọ</title>
    <link rel="stylesheet" href="renter.css"/>
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
        <a href="room.php">House Type</a>
        <a href="house.php">House</a>
        <a class="content1" href="renter.php">Tenants</a>
        <a href="baocao.php">Reports</a>
      </div>
      <div class="main_right">
        <div class="body-main">
          <div class="body-title">
            <i class="fa-solid fa-share-nodes"></i>
            <span>Phòng</span>
            <div class="btn_add_new_renter">
              <button class="add_renter" name="add_renter" >
                  <i class="fa-solid fa-user-plus"></i>
                  <a href="editRenter.php">Thêm mới</a>
              </button>
            </div>
          </div>
          <div class="body_main_renter">
            <div class="body_search">
                <form class="bar_search">
                  <div class="ip_btn">
                    <input
                      id="btn_search"
                      type="text"
                      placeholder="Tìm theo số phòng..."
                      required
                    />
                  </div>
                  <div class="btn_sear">
                    <button id="btn_search">
                      <i class="fa-solid fa-magnifying-glass"></i>
                      <span id="btn_search" class="btn_search">Tìm kiếm</span>
                    </button>
                  </div>
                </form>
              </div>
              <div class="table_infor_renter">
                  <table>
                    <thead>
                        <tr>
                            <th>Họ tên</th>
                            <th>Số điện thoại</th>
                            <th>Số phòng</th>
                            <th>Số tiền thuê</th>
                            <th>Hạn thuê</th>
                            <th>Thêm</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Đỗ THắng</td>
                            <td>0397269518</td>
                            <td>401</td>
                            <td>1.000.000</td>
                            <td>7/9/2023</td>
                            <td>
                                <button class="btn_add_renter" name="btn_add_renter">
                                    Thêm
                                </button>
                            </td>
                            <td>
                                <button class="btn_modify_renter" name="btn_modify_renter">
                                    Sửa
                                </button>
                            </td>
                            <td>
                                <button class="btn_del_renter" name="btn_del_renter">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Đỗ THắng</td>
                            <td>0397269518</td>
                            <td>401</td>
                            <td>1.000.000</td>
                            <td>7/9/2023</td>
                            <td>
                                <button class="btn_add_renter" name="btn_add_renter">
                                    Thêm
                                </button>
                            </td>
                            <td>
                                <button class="btn_modify_renter" name="btn_modify_renter">
                                    Sửa
                                </button>
                            </td>
                            <td>
                                <button class="btn_del_renter" name="btn_del_renter">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Đỗ THắng</td>
                            <td>0397269518</td>
                            <td>401</td>
                            <td>1.000.000</td>
                            <td>7/9/2023</td>
                            <td>
                                <button class="btn_add_renter" name="btn_add_renter">
                                    Thêm
                                </button>
                            </td>
                            <td>
                                <button class="btn_modify_renter" name="btn_modify_renter">
                                    Sửa
                                </button>
                            </td>
                            <td>
                                <button class="btn_del_renter" name="btn_del_renter">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Trần Hòa</td>
                            <td>0397269518</td>
                            <td>101</td>
                            <td>5.000.000</td>
                            <td>27/11/2023</td>
                            <td>
                                <button class="btn_add_renter" name="btn_add_renter">
                                    Thêm
                                </button>
                            </td>
                            <td>
                                <button class="btn_modify_renter" name="btn_modify_renter">
                                    Sửa
                                </button>
                            </td>
                            <td>
                                <button class="btn_del_renter" name="btn_add_renter">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                    </tbody>
                  </table>
              </div>
          </div>
          
        </div>
      </div>
    </div>
  </body>
</html>