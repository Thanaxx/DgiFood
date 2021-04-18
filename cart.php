<?php

    include_once("./connection/connection.php");
    $conn = connect();

    $sql = "SELECT * FROM addeditems ORDER BY id DESC";
    $foods = $conn-> query($sql) or die($conn->error);
    $fooditems = $foods->fetch_assoc();

    // do{
    //     echo $fooditems['itemname']." ".$fooditems['itemprice']. "<br>";
    // }while($fooditems = $foods->fetch_assoc());
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/cart.css">
    <title>Document</title>
</head>
<body>
        <div class="cartPage">
            <div class="userCart">
                <nav>
                    <a href="index.php" class="cartLogo"><img src="./imgs/Group 171.png" alt="" width="80px"></a>
                    <a href="order.php" class="exitCart">Cancel</a>
                </nav>
            </div>


            <form action="deleted.php" method="post">
                <table>
                        <tr>
                            <th>Item name</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>

                        <tbody>
                        <?php do{ ?>
                            <tr>
                                <td><?php echo $fooditems['itemname']; ?></td>
                                <td><?php echo $fooditems['itemprice']; ?></td>
                                <td><button type="submit" name="delete">Delete</button></td>
                                <input type="hidden" name="ID" class="deleteAdded" value="<?php echo $fooditems['ID'] ?>">
                            </tr>
                            <?php }while($fooditems = $foods->fetch_assoc())?>
                        </tbody>
                    </table>
            </form>
        </div>

        <footer>
            <div class="checkout">
                <p>Sub Total: <b>500</b></p>
                <a href="checkout.php">Check out</a>
            </div>
        </footer>
</body>
</html>