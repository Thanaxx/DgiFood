<?php
    include_once("./connection/connection.php");
    $conn = connect();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <title>Document</title>
</head>
<body>
    <div class="contactPage">
        <div class="contactForm">
            <form action="" method="post">
                <h1>Hit us up!</h1>
                <input type="text" placeholder="First name">
                <input type="text" placeholder="Last name">
                <input type="email" name="" id="" placeholder="Email">
                <input type="text" placeholder="Contact number">

                <div class="sendMessage">
                    <button>Send</button>
                </div>
            </form>
        </div>

        <div class="contactImage">
            <img src="./imgs/undraw_cooking_lyxy.svg" alt="" width="100%">
        </div>
    </div>
</body>
</html>