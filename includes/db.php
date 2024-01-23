<?php

    $servername = "localhost";
        $username = "vinithkumar";
        $password = "a";
        $dbname = "notes";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        if (!$conn){
            die("connection failed" . mysqli_connect_error());
        }
?>