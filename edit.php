<?php
    include_once "connection.php";
   
    $id= $_GET['id'];
    $query= mysqli_query($connect, "SELECT * FROM  people WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">Edit</div>
                    <div class="card-body">
                        <?php 
                            while($update= mysqli_fetch_array($query)){

                        ?>
                        <form action="edit_proccess.php" method="post">
                            <input type="hidden" name="id" value="<?php echo ($update['id']);?>">
                            <input type="text" name="name" value="<?php echo ($update['name']);?>">
                            <input type="text" name="describtion" value="<?php echo ($update['describtion']);?>">
                            <br>
                            <br>
                            <button type="submit" name ="update" class="btn btn-primary">Update</button>
                        </form>
                              
                        <?php
                             }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
</body>
</html>
