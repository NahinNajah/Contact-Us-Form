<!DOCTYPE html>
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title> Login page</title>
</head>
<body class="bg">
    
    <div class="log">
        <form action="" method="post">
            <img src="Images/icons8-user-locked-48.png" class="log-img"><br>
            <input type="email" name="email" class="txtbox" placeholder="Enter your email ID"><br/><br/>
            <input type="password" name="password" class="txtbox" placeholder="Enter your Password"><br/><br/>
            <h5><a href="Contact.php">CLICK HERE</a> to Register</h5>
            <input type="submit" name="login" class="btn" value="LOGIN"> <br>
        </form>


    </div>
</body>
</html>

<?php
 $connection= mysqli_connect("localhost", "root", "");
 $db= mysqli_select_db($connection, 'login');

 if (isset($_POST['login']))
 {
    $email= $_POST['email'];
    $password =$_POST['password'];

    $query = "select * from `singup` WHERE email= '$email' AND password = '$password' ";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_fetch_array($query_run)>0)
    {
      echo '<script type="text/javascript"> alert("Logged In")</script>';
      header("location: http://localhost/ContactForm/admin.php");
    }
    else
    {
      echo '<script type="text/javascript"> alert("Logged In Failed")</script>';
    }
 }
?>
