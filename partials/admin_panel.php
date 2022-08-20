<?php
session_start();
if($_SESSION["admin_log"]){



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-Admin's Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid text-center mt-4 text-muted">
        <div class="row">
            <div class="col-md-10">
                <h3 class="display-5 text-center">ADMIN'S PANEL</h3>
            </div>
            <div class="col-md-2">
                <a href="../"><button class="btn btn-secondary">BACK TO HOME PAGE</button></a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
                <div class="container text-center border border-info">
                    <h5 style="font-size:26px;" class="display-6 mb-5">VOTES OF RESPECTIVE PARTIES</h5>
                    <div class="container">
                        <?php
                        include("../actions/connect.php");
                        $sql="SELECT * FROM contestant_data ORDER BY votes DESC";
                        $result=mysqli_query($conn,$sql);
                        $_SESSION["c_info"]=mysqli_fetch_all($result,MYSQLI_ASSOC);
                        

                        $c_info=$_SESSION["c_info"];
                        if(count($c_info)>0){
                            $_SESSION["winner_name"]=$c_info[0]["username"];
                            $_SESSION["winner_votes"]=$c_info[0]["votes"];
                        }

                        for($i=0;$i<count($c_info);$i++){

                        ?>
            
                        <div class="row">
                            <div class="col-md-3">
                                <img style="width:50px;height:50px;" src="../uploads/<?php echo $c_info[$i]["photo"]?>" alt="">
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-4">NAME : <?php echo $c_info[$i]["username"]?></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-3">VOTES : <?php echo $c_info[$i]["votes"]?></div>
                        </div>
                        <hr>

                        <?php
                        }
                        ?>


                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="container text-center border border-info">
                    <h5 style="font-size:26px;" class="display-6 mb-5">ADMIN'S OPERATIONS</h5>
                    <a href="../admins_actions/publish_result.php"><button class="btn btn-secondary form-control mb-3">PUBLISH RESULT</button></a><br>
                    <a href="../admins_actions/unpublish_result.php"><button class="btn btn-secondary form-control mb-3">UNPUBLISH RESULT</button></a><br>
                    <a href="../admins_actions/pause.php"><button class="btn btn-secondary  form-control mb-3">PAUSE THE POLL</button></a><br>
                    <a href="../admins_actions/resume.php"><button class="btn btn-secondary form-control mb-3">RESUME THE POLL</button></a><br>
                    <a href="../admins_actions/repoll.php"><button class="btn btn-secondary form-control mb-3">CONDUCT REPOLL</button></a><br>
                    <a href="../admins_actions/start_new.php"><button class="btn btn-secondary form-control mb-3">START A NEW POLL</button></a>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>

<?php
}
?>