<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">

    <style>
        .btn{
            position: fixed;
            bottom: 240px;
            left: 850px;
            padding: 5px;
            background: pink;
            text-decoration: none;

        }

        h1{
            margin-top:80px;
            text-align: center;
            color: black;
        }

        .img1{
            margin-top: -20px;
        }

    </style>
</head>
<body>
    <h1>Welcome to Mobile Shopee!</h1>
    <div id ="frm">
        <div class = "img1"><image src = "username.png" width = "80px" height = "50px"></div>
        <form action="process.php" method="POST">
            <p>

            <label>USERNAME:</label>
            <input type="text" id="user" name="user" required/>
            </p>  
            
            <p>

            <label>PASSWORD:</label>
            <input type="password" id="pass" name="pass" required/>
            </p>
            
            <p>

            <input type="submit" id="btn" name="login"/>
            </p>
      </form>
    </div>
    <button class="btn"><a href="signup.php" style = "text-decoration: none">Sign up</a></button>
</body>
</html>