<?php

//Параметры MySQL
$location="localhost";
$user="gps_tracker";
$pass="gps@123";
$db_name="gps_tracker";

//Соединение с базой 
$db=mysql_connect($location,$user,$pass);
mysql_select_db($db_name,$db);
mysql_query("SET CHARACTER SET utf8");


?>
