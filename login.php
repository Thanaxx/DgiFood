<?php
    if(!isset($_SESSION)){ //CHECKING IF THEIR IS A SESSION THAT IS BEING SET
        session_start();
    }

    include_once("./connection/connection.php");
    $conn = connect(); //connection to DB

    if(isset($_POST['log'])){
        // echo 'login';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM  `users` WHERE username = '$username' AND passwords = '$password'";
        $userAccount = $conn->query($sql) or die ($conn->error);
        $row = $userAccount->fetch_assoc();
        $total = $userAccount->num_rows;

        if($total > 0){
            $_SESSION['UserLogin'] = $row['username'];
            echo header("Location: index.php");
        }else{
            echo "invalid details";
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>
<body>


    <div class="loginContainer">
        <form action="" method="post" class="formLog">
            <div class="logoo">
                <img src="./imgs/Group 171.png" alt="" width="30%">
                <h1>Welcome</h1>
            </div>

            <input type="text" name="username" id="uname" placeholder="Username/Email">
            <input type="password" name="password" id="password"  placeholder="Password">

            <button type="submit" name="log" class="submitLog">Login</button>
            <a href="index.php" class="cancelLog">Cancel</a>

            <div class="fpassword">
                <a href="#">Forgot password?</a> <br>
            </div>
        </form>
    </div>

</body>
</html>