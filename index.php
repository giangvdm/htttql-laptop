<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
        include "config/connection.php";
        if( $conn === false ) {
            die( print_r( sqlsrv_errors(), true));
        }
        else{
            $sql = "SELECT Ho, Ten FROM dbo.NHANVIEN";
            $stmt = sqlsrv_query( $conn, $sql );
            if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
            }
            
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
                  echo $row[0].", ".$row[1]."<br />";
            }
            
        }
        
        ?>
    </body>
</html>
