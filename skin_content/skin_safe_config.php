<?php

    $ADDRESS="localhost";
    $PORT="3306";
    $USERNAME="root";
    $PASSWORD="NDc4MTk3NHR6cQ==";
    $DATABASE="skin_database";

    /*Please don't modify the values of the SQL and some data in the backstage*/

    define("SQL_SERVER_ADDRESS",$ADDRESS,FALSE);
    define("SQL_SERVER_PORT",$PORT,FALSE);
    define("SQL_SERVER_USERNAME",$USERNAME,FALSE);
    define("SQL_SERVER_PASSWORD",base64_decode($PASSWORD),FALSE);
    define("SQL_SERVER_DATABASE",$DATABASE,FALSE);

    /*backstage information*/

    // $BS_USERNAME="admin";
    // $BS_PASSWORD="123456";

    // define("BACKSTAGE_USERNAME",$BS_USERNAME,FALSE);
    // define("BACKSTAGE_PASSWORD",$BS_PASSWORD,FALSE);

    // 默认情况下不再启动基于config文件的管理员账户
    // skin_safe_config.php file-based admin account is no longer enabled by default.