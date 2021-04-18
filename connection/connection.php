<?php
    function connect(){
        $host = "localhost";
        $username = "root";
        $password = "Developer1207";
        $database = "digifood";

        $con = new mysqli($host, $username, $password, $database);

        if($con -> connect_error){ //checking connection
            echo $con -> connect_error;
            // echo "not connected";
        }else{
            return $con; //connected to the database
        }
    }
?>