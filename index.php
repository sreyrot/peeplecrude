<?php
    include_once "connection.php";
    $query= mysqli_query($connect, "SELECT * FROM people");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Query Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <a href="add.php" class="btn btn-success" >Add new</a>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
             
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>describtion</th>
                        <th>action</th>
                    </tr>
                    <?php 
                    while($data= mysqli_fetch_array($query)){

                    
                ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['describtion']; ?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $data['id'];?>">Delete</a> | <a href="edit.php?id=<?php echo $data['id']?>">Edit</a> 
                        </td>
                       
                    </tr>

                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>