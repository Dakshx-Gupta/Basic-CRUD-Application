<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    include("connect.php");
    $sql = "DELETE FROM data_library WHERE id = $id";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION['delete'] = "Book removed Successfully";
        header("Location:index.php");
    }
}
?>
