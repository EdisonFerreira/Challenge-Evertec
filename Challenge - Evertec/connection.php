<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "ChallengeOne";

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
    {
        die("Buddy, failed to connect!");
    }
?>
