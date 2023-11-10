<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM finance where id = $id";
    $query = mysqli_query($connect, $sql);
    header('location: baocao.php?page_layout=danhsach');
?>
