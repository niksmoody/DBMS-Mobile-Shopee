<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">

    <style>
      
    </style>
</head>
<body>
    <div id ="frm">
        <form action="/mobile/signup.php" method="POST">
           
            
            <p>
            <label>Username:</label>
            <input type="text" id="pass" name="Username" required/>
            </p>
<p>
            <label>Password: </label>
            <input type="password" id="pass" name="Password" required/>
            </p>
            
            <p>

<label>Retype:</label>
<input type="password" id="user" name="password" required/>
</p>  
<p>

<label>Address:</label>
<input type="text" id="user" name="Address" required/>
</p> 
<p>
<label>Ph. No.:</label>
<input type="text" id="user" name="Phno" required/>
</p>  
<p>          

            <input type="submit" id="btn" name="register"/>
            </p>
      </form>
    </div>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usernamee = $_POST['Username'];
        $passwordd = $_POST['Password'];
        $address = $_POST['Address'];
        $Phno = $_POST['Phno'];

        
      
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
        $sql = "INSERT INTO `login` (`id`, `username`, `password`, `Address`, `Phno`) VALUES (NULL, '$usernamee', '$passwordd', '$address', '$Phno')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
            echo "login success!!! welcome ".$row['username'];
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Signup Successful.');\n";
        echo "window.location='login.php'";
        echo "</script>";
        //   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //   <strong>Success!</strong> Your entry has been submitted successfully!
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true"></span>
        //   </button>
        // </div>';
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