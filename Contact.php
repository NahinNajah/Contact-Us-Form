<!DOCTYPE html>
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title> Register page</title>
</head>
<body class="bg">
    
    <div class="heading">
        <h1>Contact Form</h1>
    </div>
    <div class="contact">
    <form action="save.php" method="post">
            <img src="Images/online-registration-sign-up-account.png" class="log-img"><br>
            <input type="fname" name="fname" class="txtbox" placeholder="Enter Your First Name"><br/><br/>
            <input type="lname" name="lname" class="txtbox" placeholder="Enter Your Last Name"><br/><br/>
            <input type="number" name="number" class="txtbox" placeholder="Enter Your Contact Number"><br/><br/>
            <input type="email" name="email" class="txtbox" placeholder="Enter your email ID"><br/><br/>
            <input type="password" name="pass" class="txtbox" placeholder="Enter your Password"><br/><br/>
            <input type="submit" name="login" class="btn" value="SUBMIT"> <br>
        </form>
    </div>
</body>
</html>