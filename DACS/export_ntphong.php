<?php
    $output = ''; // Thêm dấu chấm phẩy ở cuối dòng này
    if(isset($_POST["export_ntphong"])) { // Thêm dấu ngoặc và dấu chấm phẩy
        $sql = "SELECT * FROM tenants";
        $connect = mysqli_connect("localhost","root","","vidu");
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            $output .= '
                <table class="table" border="1"> 
                    <tr>
                        <th>Id</th>
                        <th>Name</th> 
                        <th>Phone</th>
                        <th>Room number</th>
                        <th>Rental amount</th> 
                        <th>Lease term</th> 
                    </tr>
            ';

            while($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>'.$row["id"].'</td> 
                        <td>'.$row["name"].'</td>
                        <td>'.$row["phone"].'</td> 
                        <td>'.$row["r_number"].'</td> 
                        <td>'.$row["r_amount"].'</td>
                        <td>'.$row["co_date"].'</td>
                    </tr>
                ';
            }

            $output .= '</table>';
            header("Content-Type: application/xls");
            header("Content-Disposition: attachment; filename=nguoithuephong.xls");
            echo $output;
        }
    }
?>
