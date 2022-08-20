<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body id="bod" class="text-center">
    <div style="margin-top:2000px;" class="container border border-info text-center m-auto mt-5 w-50">
        <h3 style="font-size: 30px;" class="display-6 text-muted mt-3 mb-4">REGISTER TO VOTE</h3>
        <form action="../actions/reg.php" method="POST" enctype="multipart/form-data">
            <input type="text" class="form-control w-50 mb-4 m-auto" placeholder="USERNAME" name="username" required="required">
            <input type="password" class="form-control w-50 mb-4 m-auto" placeholder="ENTER YOUR PASSWORD" name="password" required="required">
            <input type="password" class="form-control w-50 mb-4 m-auto" placeholder="CONFIRM YOUR PASSWORD" name="cpassword" required="required">
            <input type="file" class="form-control w-50 mb-4 m-auto" name="photo" required="required">
            <input type="submit" value="REGISTER" class="form-control w-50 btn btn-secondary mb-4" name="register">

        </form>
    </div>
    
</body>
</html>