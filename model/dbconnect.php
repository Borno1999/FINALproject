<?php

    function connect()
    {
    $conn = new mysqli("localhost","root","1234","ms");
    if($conn->connect_errno)
    {
        die("Connection failed due to ".$conn->connect_error);
    }
    return $conn;
    }

?>
