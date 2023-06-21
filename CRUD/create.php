<?php

include 'connection.php';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $rollno = $_POST['roll_no'];

    $sql = mysqli_query($conn,"INSERT INTO `class`(`name`,`age`,`roll_no`) VALUES('$name','$age','$rollno')");
    
    if($sql)
    {
        echo '<script>alert(" registered successfully"); header("location:create.php");</script>';
    }
   else{
    echo "error";
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <h1 style="margin-left: 250px;">student registration</h1>
    
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4 mt-5">
                <form method="post">
                    <label>enter name</label>
                    <input type="text" class="form-control" name="name" required>
                    <label>enter age</label>
                    <input type="number" class="form-control" name="age" required>
                    <label>enter roll_no</label>
                    
                    <input type="text" class="form-control" name="roll_no" required >

                    <input type="submit" class="btn-btn-primary mt-2 mx-5" name="submit">
                </form>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>