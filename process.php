<?php
include('connect.php');
if(isset($_POST['create'])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $sql = "INSERT INTO data_library(title, author, genre, description) VALUES('$title', '$author', '$genre', '$description')";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION['create'] = "Book Added Successfully";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}

if(isset($_POST['edit'])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "UPDATE data_library SET title = '$title', author = '$author', genre = '$genre', description = '$description' WHERE id = $id" ;
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION['update'] = "Record updated Successfully";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
?>
