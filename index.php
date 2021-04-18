<?php

    if(!isset($_SESSION)){ //CHECKING IF THEIR IS A SESSION THAT IS BEING SET
        session_start();
    }

    include_once("./connection/connection.php");
    $conn = connect(); //connection to DB

    // if(isset($_SESSION['UserLogin'])){
    //     echo "Welcome ".$_SESSION['UserLogin'];
    // }else{
    //     echo "You haven't signed in yet!";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css///main.css">
    <link rel="stylesheet" type="text/css" href="./css//about.css">
    <link rel="stylesheet" type="text/css" href="./css/homenu.css">
    <link rel="stylesheet" type="text/css" href="./css////details.css">
    <link rel="stylesheet" type="text/css" href="./css//more.css">
    <link rel="stylesheet" type="text/css" href="./css/order.css">

    <link rel="stylesheet" href="./cssFontawesome/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <title>DigiFood | Order now!</title>

</head>
<body>


     <!-- HOME PAGE -->
     <div class="homePage" style="display: block;">
        <div class="homebg">
            <img src="./imgs/Group 170.png" alt="" width="100%" height="auto">
        </div>

        <nav class="homeNav">
            <div class="digiFoodLogo">
                <img src="./imgs/Group 171.png" alt="">
            </div>

            <div class="digiFoodLinks">
                <a href="#">Home</a>
                <a href="#abt">About</a>
                <a href="#category">Categories</a>
                <a href="contacts.php" class="contactPage">Contact</a>

                <?php if(isset($_SESSION['UserLogin'])) {?>

                    <a href="logout.php">Logout</a>

                <?php } else{ ?>
                        <button class="login"><a href="login.php">Login</a></button>
                <?php } ?>

            </div>
        </nav>

        <!--HOME COVER  -->
        <div class="homeCover">
            
            <div class="coverTitle">
                <span class="mainTt">We feed your hungry <br>
                    <span style="color: #FFA47B; font-family: 'Secular One', sans-serif;">stomachs</span> virtually. <br>
                </span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, neque dolorum impedit <br> cumque quasi veritatis vitae suscipit est. Doloribus, ipsum.
                </p>

                <div class="orderbtn">
                    <?php if(isset($_SESSION['UserLogin'])) {?>
                    <div>
                        <button><a href="order.php">ORDER NOW !</a></button>
                    </div>

                    <?php } else{ ?>
                        <div>
                            <button><a href="order.php">ORDER NOW !</a></button>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="sideIcons">
            <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
        </div>
    </div>

        <!-- ABOUT -->
        <div class="about" id="abt">
            <div class="aboutWrapper">
                <div class="aboutImg">
                    <img src="./imgs/febrian-zakaria-SiQgni-cqFg-unsplash.jpg" alt="" width="100%" height="100%">
                </div>
                <div class="aboutDescription">
                    <h1>All about DigiFood</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt voluptatem corporis quisquam voluptate aliquam doloremque perspiciatis perferendis facilis exercitationem deserunt. Officiis aliquam veniam aperiam minima, necessitatibus omnis fugit earum, provident alias ratione reprehenderit tempore expedita quo ut inventore. Inventore, distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum obcaecati exercitationem quae tenetur enim magnam facilis atque adipisci rem assumenda nemo, aut nesciunt. A quae voluptates quasi ad eveniet non, debitis provident similique inventore atque, iusto voluptatum, nihil ratione odit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque consequuntur, sequi vero, officia odit ipsum minus ullam, iure reiciendis alias sit dolores. Voluptas, minima. Nesciunt optio corrupti vitae repellendus fugiat voluptatum animi totam enim cupiditate. Odit porro a cupiditate ea iure ipsa praesentium deserunt vel! Quo corrupti placeat delectus aliquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maxime ipsam adipisci? Error, dolorem quas necessitatibus vitae cupiditate similique soluta neque maiores magnam ea eligendi at repellat. Dicta, distinctio porro!</p>
                </div>
            </div>
        </div>

    <!-- HOME MENU -->
    <div class="menu" id="category">
            <div class="menuWrapper">

                <div class="menuCaption">
                    <div class="menuTitle">
                        <h1>OUR MENU</h1>
                    </div>
                    <div class="menuDesc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum deserunt repellat dignissimos animi ipsam recusandae distinctio delectus doloremque nobis voluptatibus molestiae iste possimus, illo alias explicabo cumque pariatur dolore fugiat.</p>
                    </div>
                </div>

                <div class="menuA">
                    <div class="imageA">
                        <h2>Desserts</h2>
                        <img src="./imgs/Mask Group.png" alt="" width="70%" height="300px">
                    </div>
                    <div class="imageADesc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem numquam labore, quaerat recusandae voluptas est itaque quas tempore sit nihil, dolor saepe maxime deleniti! Dolorem provident architecto culpa quidem harum?</p>
                    </div>
                </div>

                <div class="menuA">
                    <div class="imageADesc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem numquam labore, quaerat recusandae voluptas est itaque quas tempore sit nihil, dolor saepe maxime deleniti! Dolorem provident architecto culpa quidem harum?</p>
                    </div>
                    <div class="imageA">
                        <h2>Grilled</h2>
                        <img src="./imgs/Mask Group (1).png" alt="" width="70%" height="300px">
                    </div>
                </div>

                <div class="menuA">
                    <div class="imageA">
                        <h2>Soup</h2>
                        <img src="./imgs/Mask Group (2).png" alt="" width="70%" height="300px">
                    </div>
                    <div class="imageADesc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem numquam labore, quaerat recusandae voluptas est itaque quas tempore sit nihil, dolor saepe maxime deleniti! Dolorem provident architecto culpa quidem harum?</p>
                    </div>
                </div>

                <div class="menuA">
                    <div class="imageADesc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem numquam labore, quaerat recusandae voluptas est itaque quas tempore sit nihil, dolor saepe maxime deleniti! Dolorem provident architecto culpa quidem harum?</p>
                    </div>
                    <div class="imageA">
                        <h2>Appetizers</h2>
                        <img src="./imgs/Mask Group (3).png" alt="" width="70%" height="300px">
                    </div>
                </div>
            </div>
    </div>

                <!-- DETAILS -->
        <div class="details">
            <div class="detailsWrapper">
                <div class="detailsImg">
                    <img src="./imgs/annie-spratt-rgKdv9DzVsc-unsplash.jpg" alt="" width="100%" height="100%">
                </div>
                <div class="detailsDescription">
                    <h1>Want to reach us?</h1>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum obcaecati exercitationem quae tenetur enim magnam facilis atque adipisci rem assumenda nemo, aut nesciunt. A quae voluptates quasi ad eveniet non, debitis provident similique inventore atque, iusto voluptatum, nihil ratione odit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque consequuntur, sequi vero, officia odit ipsum minus ullam, iure reiciendis alias sit dolores. Voluptas, minima. Nesciunt optio corrupti vitae repellendus fugiat voluptatum animi totam enim cupiditate. Odit porro a cupiditate ea iure ipsa praesentium deserunt vel! Quo corrupti placeat delectus aliquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maxime ipsam adipisci? Error, dolorem quas necessitatibus vitae cupiditate similique soluta neque maiores magnam ea eligendi at repellat. Dicta, distinctio porro!</p>
                    
                    <div class="contactEx">
                        <button><a href="contacts.php">Let's talk!</a></button>
                    </div>
                </div>
            </div>
        </div>


    <footer>
            <h1>Copyright©2021 | DigiFood</h1>
    </footer>


    <script src="./js/fnctn.js"></script>
</body>
</html>
