<?php

$host="localhost";
$db="staj";
$user="root";
$pass="";
if($_SERVER['SERVER_NAME']!= '10.91.0.50')
{
$base_url	= 'http://localhost/staj';
}
else
{
$base_url	= 'http://localhost/staj';
}

//$conn=@mysql_connect($host,$user,$pass) or die("Mysql Baglanamadi");

$dbgln = new PDO("mysql:host=".$host.";dbname=".$db, $user, $pass);
//mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");
//mysql_set_charset('latin5',$conn);
//mysql_query("SET NAMES UTF8");  
$dbgln->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
?>

