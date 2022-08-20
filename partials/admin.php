<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container border border-info text-center  mt-5 w-25  pb-5">
        <h2 style="font-size: 30px;" class="text-muted display-6 mb-4 mt-3">LOGIN AS AN ADMIN</h2>
        <form action="../actions/admin_login.php" method="POST">
            <input type="text" class="form-control mb-4" placeholder="USERNAME" name="username">
            <input type="password" class="form-control mb-4" placeholder="PASSWORD" name="password">
            <input type="submit"   value="LOGIN" name="login" class="mt-2 form-control btn btn-secondary">
        </form>
    </div>
    
</body>
</html>