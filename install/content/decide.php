<?php
require_once "../../skin_include/class/mysql.class.php";

$loadSql = file_get_contents('../server/server.sql');
$endSql = explode(';', $loadSql);

$db_link=$_GET['database_link'];
$db_user=$_GET['database_username'];
$db_pass=$_GET['database_password'];
$db_name=$_GET['database_name'];
$pass=(string)"'".md5($db_pass)."'";
$user=(string)"'".$db_user."'";
$db_sql="CREATE DATABASE IF NOT EXISTS `".$db_name."` CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';";

$mysql=new mysql();
$connectMysql=$mysql->nodb_connect($db_link,$db_user,$db_pass);//连接数据库
$queryMysql=$mysql->variable($db_sql);

$useMysql=$mysql->variable("USE ".$db_name);

foreach ($endSql as $Sql){
    $queryMysql=$mysql->variable($Sql.';');
}

$queryMysql=$mysql->variable("INSERT INTO `skin_config_informations` (`admin_username`,`admin_password`,`admin_authority`,`admin_comment`) VALUES (".$user.",".$pass.",1,'Principal account.')");

$configPath="../../skin_content/skin_safe_config.php";

file_put_contents($configPath,str_replace('{ADDRESS}',$db_link,file_get_contents($configPath)));
file_put_contents($configPath,str_replace('{USERNAME}',$db_user,file_get_contents($configPath)));
file_put_contents($configPath,str_replace('{PASSWORD}',base64_encode($db_pass),file_get_contents($configPath)));
file_put_contents($configPath,str_replace('{DATABASE}',$db_name,file_get_contents($configPath)));


echo "<script>location.href='../index.php?method=2';</script>";