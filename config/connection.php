<?php
            $serverName = "DESKTOP-DI246ET\\SQLEXPRESS";
            $username = "sa";
            $password = "12345";
            $dbname = "QL_VATTU";
    
            $connectionInfo = array( "Database"=>$dbname, "UID"=>$username, "PWD"=>$password);
            $conn = sqlsrv_connect( $serverName, $connectionInfo );
?>