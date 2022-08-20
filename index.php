<?php

session_start();

if(!isset($_SESSION["publish_result"]) or !$_SESSION["publish_result"]){



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Service</title>
    <link href="./styles/index.css" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid mt-3">
        <div class="row">
            <h1 class="display-5 text-center col-md-10">KIRAN'S VOTING SYSTEM</h1>
            <a class="col-md-2 text-muted" href="./partials/admin.php"><button class="btn btn-secondary">Admin's Login</button></a>
        </div>
    </div>
    <div style="margin-top:150px;"class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="container border border-info text-center">
                   <h2 style="font-size: 30px;" class="text-muted display-6 mb-4 mt-3">LOGIN AS A VOTER</h2>
                   <form action="./actions/login.php" method="POST" enctype="multipart/form-data">
                    <input type="text" class="form-control mb-3" placeholder="USERNAME" name="username" required="required">
                    <input type="password" class="form-control mb-3" placeholder="PASSWORD  " name=password required="required">  
                    <input type="submit" class="btn btn-secondary mb-4 " value="LOGIN" name="login">
                    <p>Dont have account? <a class="text-muted"href="./partials/register.php">Register Here</a></p>
                   </form>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="container border border-info text-center">
                    <h2 style="font-size: 30px;"class="text-muted display-6 mb-4 mt-3">REGISTER AS A CONTESTANT</h2>
                    <form action="./actions/c_reg.php" method="POST" enctype="multipart/form-data">
                        <input type="text" class="form-control mb-3" placeholder="USERNAME" name="username" required="required">
                        <input type="password" class="form-control mb-3" placeholder="PASSWORD" name="password" required="required">
                        <input type="password" class="form-control mb-3" placeholder="CONFIRM PASSWORD" name="cpassword" required="required">
                        <input type="file" class="form-control mb-3" placeholder="UPLOAD YOUR PHOTO" name="photo" required="required">
                        <input type="submit" class="form-control mb-3 btn btn-secondary mb-4" value="REGISTER" required="required">
                    </form>
                </div>
            </div>
        </div>
        <div class="row"></div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

<?php


}else if($_SESSION["publish_result"]){
    $winner_name=$_SESSION["winner_name"];
    $winner_votes=$_SESSION["winner_votes"]
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center border border-info mt-5">
        <h3 class="display-4"><?php echo $winner_name ?> HAS WON THE ELECTION WITH <?php echo $winner_votes?> VOTES </h3>
    </div>
    
</body>
</html>





    <?php
}

?>