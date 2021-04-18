<?php

    include_once("./connection/connection.php");
    $conn = connect();

    if(isset($_POST['delete'])){
        $id = $_POST['ID'];
        $sql = "DELETE FROM addeditems WHERE ID = '$id'";
        $conn->query($sql) or die ($conn->error);
        echo header("Location: cart.php");
    }

?>