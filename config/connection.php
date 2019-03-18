<?php
    // Giang's Laptop: DESKTOP-B238NK5
    // Giang's Desktop: DESKTOP-P4LC40P

    $serverName = "DESKTOP-B238NK5";
    $username = "sa";
    $password = "12345";
    $dbName = "laptop";

    $connectionInfo = array("Database"=>$dbName, "UID"=>$username, "PWD"=>$password);
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if($conn === false) {
        die( print_r( sqlsrv_errors(), true));
    }