<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    include("connect.php");
    $sql = "DELETE FROM data_library WHERE id = $id";
    if(mysqli_query($conn, $sql)){
        // Renumber all IDs sequentially
        mysqli_query($conn, "SET @count = 0");
        mysqli_query($conn, "UPDATE data_library SET id = (@count := @count + 1)");
        mysqli_query($conn, "ALTER TABLE data_library AUTO_INCREMENT = 1");

        session_start();
        $_SESSION['delete'] = "Book removed Successfully";
        header("Location:index.php");
    }
}
?>
