<?php

    if(!isset($_SESSION)){ //CHECKING IF THEIR IS A SESSION THAT IS BEING SET
        session_start();
    }

    include_once("./connection/connection.php");
    $conn = connect(); //connection to DB

    if(isset($_SESSION['UserLogin'])){
        // echo "Welcome ".$_SESSION['UserLogin'];
    }else{
        echo header("Location: index.php");
    }


    $sql = "SELECT * FROM menu";
    $item = $conn->query($sql) or die ($conn->error);
    $list = $item->fetch_assoc();

    // do{
    //     echo $list['food_name']." ".$list['food_price']."<br>";
    // }while($list = $item->fetch_assoc());



    // INSERT ITEMS USING BUTTON
    if(isset($_POST['submit'])){
        // echo "you added an item";
        // echo $list['food_name']." ".$list['food_price']."<br>";

        $itemImage = $list['image'];
        $itemName = $list['food_name'];
        $itemPrice = $list['food_price'];
        $itemDescription = $list['description'];

        $sql = "INSERT INTO `addeditems`(`itemname`, `itemprice`) VALUES ('$itemName', '$itemPrice')";
        $conn->query($sql) or die($conn->error);
        echo header("Location: order.php");
             
    }

        // search results code to get in the databse
        $Search = $_GET['search'];

        $sql = "SELECT * FROM menu WHERE food_name LIKE '%$Search%' ORDER BY ID DESC";;
        $item = $conn->query($sql) or die ($conn->error);
        $list = $item->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css//category.css">
    <link rel="stylesheet" href="./cssFontawesome/all.min.css">

    <title>DigiFood | Order now!</title>
</head>
<body>

    <div class="menuOrder">

        <nav>
            <a href="cart.php" class="viewCart"><i class="fas fa-2x fa-shopping-cart"></i></a>
            <a href="index.php"><img src="./imgs/Group 171.png" alt="" width="80px"></a>
        </nav>

        <h1 class="orderTitle">FIND YOUR MENU</h1>
        
            <form action="search.php" method="get" class="searchA">
                <input type="text" name="search" id="search" placeholder="Search food..." class="searchMenu">
                <button type="submit"><i class="fa fa fa-search" aria-hidden="true"></i></button>
            </form>

        <form action="search.php" method="post" class="menu">
            <?php do{ ?>
                <ul>
                    <img src="'.$list->image.'" height="150" width="330">
                    <li class="foodname"><?php echo $list['food_name']; ?></li>
                    <li class="foodprice"><?php echo $list['food_price']; ?></li>
                    <li class="fooddescription"><?php echo $list['description']; ?></li>
                    
                    <div class="addToCart">
                        <input type="submit" name="submit" value="Add to cart">
                    </div>
                </ul>
            <?php }
            while($list = $item->fetch_assoc()); ?>
        </form>
    </div>

        



</body>
</html>

