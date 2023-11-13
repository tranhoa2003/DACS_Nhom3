<?php
    $output = ''; // Thêm dấu chấm phẩy ở cuối dòng này
    if(isset($_POST["export_thuchi"])) { // Thêm dấu ngoặc và dấu chấm phẩy
        $sql = "SELECT * FROM finance";
        $connect = mysqli_connect("localhost","root","","vidu");
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            $output .= '
                <table class="table" border="1"> 
                    <tr>
                        <th>Id</th>
                        <th>Description</th> 
                        <th>Date</th>
                        <th>Price</th> 
                    </tr>
            ';

            while($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>'.$row["id"].'</td> 
                        <td>'.$row["r_description"].'</td>
                        <td>'.$row["r_date"].'</td> 
                        <td>'.$row["r_price"].'</td>
                    </tr>
                ';
            }

            $output .= '</table>';
            header("Content-Type: application/xls");
            header("Content-Disposition: attachment; filename=tinhtrangphong.xls");
            echo $output;
        }
    }
?>