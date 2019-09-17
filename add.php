<?php
    include_once "connection.php";
   if(isset($_POST['create'])){
    $name= $_POST['name'];
    $describtion= $_POST['describtion'];
    $query= mysqli_query($connect, "INSERT INTO people(name,describtion) 
    VALUES( '$name','$describtion')");
    if($query == TRUE){
        header("Location: index.php");
    }else{
        echo("cannot create data");
    }
   
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">Create new data</div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                           <input type="text" name='name' placeholder="name" >
                           <input type="describtion" name='describtion' placeholder="describtion" ><br>
                           <br>
                           <button type="submit" name= "create" class="btn btn-info">Create</button>
                           
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>
