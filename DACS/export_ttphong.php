<?php
    $output = ''; // Thêm dấu chấm phẩy ở cuối dòng này
    if(isset($_POST["export_ttphong"])) { // Thêm dấu ngoặc và dấu chấm phẩy
        $sql = "SELECT * FROM house_type";
        $connect = mysqli_connect("localhost","root","","vidu");
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            $output .= '
                <table class="table" border="1"> 
                    <tr>
                        <th>Id</th>
                        <th>Number</th> 
                        <th>Condition</th>
                        <th>Price</th>
                        <th>Convenient</th> 
                    </tr>
            ';

            while($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>'.$row["id"].'</td> 
                        <td>'.$row["r_number"].'</td>
                        <td>'.$row["r_condition"].'</td> 
                        <td>'.$row["price"].'</td> 
                        <td>'.$row["convenient"].'</td>
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