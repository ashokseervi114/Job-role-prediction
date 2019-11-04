<?php 

//Database Connenction Variables

$db['db_hostname'] = "localhost";
$db['db_username'] = "root";
$db['db_password'] = "";
$db['db_name'] = "xmajor";

foreach($db as $key => $value){

define(strtoupper($key), $value);

}




?>