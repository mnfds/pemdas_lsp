<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #2416BF;
        }
        .login{
            margin: auto;
            width: 500px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            border: #FAC815 5px solid;
        }
        .font{
            font-family: fantasy;
            color: #2416BF;
        }
    </style>
</head>
<body>
    <div class="container my-2">
        <div class="login">
            <div class="text-center">
                <img class="img-fluid" src="logo1.png" width="250px" alt="">
            </div>
            <h2 class="font">
                Login
            </h2>
            <form action="proseslogin.php" method="POST">
                <div>
                    <label class="form-label mt-3 font" for="user">Username</label>
                    <input class="form-control text-warning" type="text" name="user">
                </div>
                <div>
                    <label class="form-label mt-3 font" for="user">Password</label>
                    <input class="form-control text-warning" type="password" name="pass">
                </div>

                <button class="btn btn-outline-warning my-2 font col-12" type="submit">Login</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>