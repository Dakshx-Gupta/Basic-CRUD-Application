<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
    <div class="container">
        <header class='d-flex justify-content-between my-4'>
            <h1>Edit Book</h1>
            <div>
                <a href="index.php" class='btn btn-primary'>Back</a>
            </div>
        </header>
        <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            include('connect.php'); 
            $sql = "SELECT * FROM data_library WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
        ?> 
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class='form-control' name='title' value = "<?php echo $row['title']; ?>" placeholder='Enter Book Title'>
            </div>
            <div class="form-element my-4">
                <input type="text" class='form-control' name='author' value = "<?php echo $row['author']; ?>" placeholder='Enter Author Name'>
            </div>
            <div class="form-element my-4">
                <input type="text" class='form-control' name='genre' value = "<?php echo $row['genre']; ?>" placeholder='Enter book genre'>
            </div>
            <div class="form-element my-4">
                <input type="text" class='form-control' name='description' value = "<?php echo $row['description']; ?>" placeholder='Enter Book Description'>
            </div>
            <input type = 'hidden' name = 'id' value = '<?php echo $row['id']; ?>'>
            <div class="form-element my-4">
                <input type="submit" class='btn btn-success' name='edit' value ='Edit Book'>
            </div>
        </form>
        <?php
        }
        ?>
    </div>
</body>
</html>
