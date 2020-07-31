<?php
    $svr = "localhost";
    $usr = "root";
    $pwd = "";
    $db = "nelcom";
    $conn = new mysqli($svr, $usr, $pwd, $db);
    if($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
?>