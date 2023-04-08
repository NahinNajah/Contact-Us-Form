<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg">
   <div class="heading">
        <h1>USER INFORMATION</h1>
    </div>
    <div class="tb">
        <table>
            <tr>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>MOBILE NUMBER</th>
                <th>PASSWORD</th>
            </tr>
            <?php

                $conn = mysqli_connect("localhost", "root", "", "login") or die("connection failed");
                $sql = "SELECT `First_name`, `Last_name`, `Email`, `Mobile`, `pass` FROM `contactform`";
                $result = mysqli_query($conn, $sql) or die("Query Failed!");

                if($result-> num_rows > 0 ){
                    while($row = $result->fetch_assoc()){
                        echo "<tr><td>".$row["First_name"]. "<td>" .$row["Last_name"]. "<td>" .$row["Email"]. "<td>" .$row["Mobile"]. "<td>" .$row["pass"]. "<td>";
                    }
                    echo "</table>";
                }
                else{
                    echo "0 result";
                }

                mysqli_close($conn);
            ?>   
        </table>
    </div>    

</body>
</html>