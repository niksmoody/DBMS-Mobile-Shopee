<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv = "refresh" content = "9; url = index.php" />
    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  background: url(https://learndesigntutorial.com/wp-content/uploads/2021/03/bg.png) no-repeat;
  background-size: cover;
  background-position: bottom;
  background-color: rgba(0,0,0,0.7);
  background-blend-mode: overlay;
  height: 100vh;
  overflow: hidden;
}

h1{
    margin-top:20px;
    text-align: center;
    color: white;
}

.text{
    margin-top: 200px;
}

.wrap{
  position: absolute;
  height: 150px;
  bottom: 100px;
  left: 0;
  width: 100%;
}
.image{
  width: 150px;
  position: absolute;
}
.truck-img{
  bottom: 0;
  left: -150px;
  z-index: 2;
  animation: truck 10s linear infinite;
}
@keyframes truck{
  40%, 70%{
    left: 60%;
  }
  100%{
    left: 100%;
  }
}
.box-img{
  width: 35px;
  z-index: 1;
  top: 55%;
  left: 60%;
  opacity: 0;
  animation: box 10s linear infinite;
}
.box-img2{
  animation-delay: 1s;
}
@keyframes box{
  0%, 40%{
    opacity: 0;
    left: 55%;
  }
  50%{
    opacity: 1;
    left: 60%;
  }
  60%, 100%{
    opacity: 0;
    left: 60%;
  }
}
    </style>
</head>
<body>
    <h1>Your order has been placed successfully!<h1>
<div class="wrap">
	<img class="image truck-img" src="https://learndesigntutorial.com/wp-content/uploads/2021/03/truck.png" alt="">
	<img class="image box-img" src="https://learndesigntutorial.com/wp-content/uploads/2021/03/box.png" alt="">
	<img class="image box-img box-img2" src="https://learndesigntutorial.com/wp-content/uploads/2021/03/box.png" alt="">
</div>
</body>
</html>