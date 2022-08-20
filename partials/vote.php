<?php
session_start();
if(isset($_SESSION["voter_info"])){
$c_info=$_SESSION["c_info"];
$voter_info=$_SESSION["voter_info"];

if($voter_info["status"]==0){
    $status="<b class='text-danger'>Not Voted</b>";
}
else{
    $status="<b class='text-success'>Voted</b>";
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system - Vote</title>
    <link href="../styles/vote.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="container text-center">
            <h1 style="font-size:38px;" class="display-4 mt-4 text-muted">VOTE TO YOUR FAVORIATE PARTY</h1>
        </div>
        <div class="container-fluid text-left">
           <a href="../actions/logout.php"><button class="btn btn-secondary">LOGOUT</button></a>
        </div>

        <div class="row mt-5">
            <div class="col-md-5">
                <div class="container border border-info">
                    <div class="text-center">
                        <h3 style="font-size:26px;" class="display-6 text-muted mb-4 mt-3">VOTER</h3>
                        <img id="ui" src="../uploads/<?php echo $voter_info["photo"]?>"><br><br>
                    </div>
                    <div class="container text-muted">
                        <p>Name : <?php echo $voter_info["username"]?><p>
                        <p>Voter Id : <?php echo $voter_info["Id"]?><p>
                        <p>Status : <?php echo $status?> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div class="container border border-info">
                    <h4 style="font-size: 26px;"class="display-6 text-muted mb-4 mt-3 text-center">YOUR VOTING MACHINE</h4>
                    <div class="container pt-4">

                    <?php
                    for($i=0;$i<count($c_info);$i++){
                    ?>

                        <div class="row">
                            <div class="col-md-3">
                                <img  id="gi" src="../uploads/<?php echo $c_info[$i]["photo"]?>" alt="">
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <p><?php echo $c_info[$i]["username"];?></p>
                            </div>
                            <div class="col-md-3">
                                <form action="../actions/update_vote.php" method="POST">
                                    <input type="hidden" value="<?php echo $c_info[$i]['Id']?>" name="cid">
                                    <input type="hidden" value="<?php echo $c_info[$i]['votes']?>" name="cvotes">
                                <?php
                                
                                if($voter_info["status"]==1){
                                    ?>
                                    <p class="text-danger">Voted</p>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button class="btn btn-success" type="submit">Vote Here</button>
                                    <?php
                                }
                                ?>
                                </form>
                            </div>
                        </div>
                        <hr>

                        <?php
                    }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
}else{
    header('location:../');
}
?>