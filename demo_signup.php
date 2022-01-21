<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">

    <title>Add Voter</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
background: #eee;
}
.voter{
    border: solid gray 1px;
    text-align: center;
    width: 50%;
    border-radius: 5px;
    margin: 100px auto;
    background: white;
}
label{
        width:100px;
        text-align: center;
        display:inline-block;
    }

input{
	margin-top: 20px;
    margin-left: 50px;
	font-size: 17px;
	padding: 15px;
}

.btn1{
  position: fixed;
  bottom: 300px;
  right: 650px;
  border: 0;
  background: #0A2558;
  color: white;
  padding: 15px 32px;
  text-align: center;
  margin-top: 30px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
   </style>
</head>
<body >
  <section class="home-section">
       
      <div class="main">
 		<div class="body"></div>
 			
       <div class="voter">
          <h2>Add Voter<h2>
    <form action="/mobile/demo_signup.php" method="post">
    <label>ID</label><input type="number" name="ID" ><br>
    <label>Username</label><input type="text" name="username"><br>
    <label>Password</label><input type="password" name="password"><br>
    <button class="btn1">SUBMIT</button>
    </form>
  </div>
 		</div>
    
     <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usernamee = $_POST['username'];
        $passwordd = $_POST['password'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "productdb";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `login` (`id`, `username`, `password`) VALUES (NULL, '$usernamee', '$passwordd')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>';
        }

      }

    }

    
?>

</body>
</html> 