<?php
ob_start();
error_reporting(0);
if($_SERVER['SERVER_NAME'] != '10.91.0.50')
{
$base_url	= 'http://localhost/staj';
}
else
{	
$base_url	= 'http://localhost/staj';
}

if ($_SERVER['HTTP_HOST'] != 'http://saha.erzincan.bel.tr/staj')
	{#host
	$host 		= 'localhost';
	$db  		= 'staj';
	$user 		= 'root';
	$pass 		= '';
	//$base_url	= 'http://10.91.0.50/staj';
	}
else
	{#local
	$host 		= '127.0.0.1';
	$db  		= 'staj';
	$user 		= 'root';
	$pass 		= '';
	//$base_url	= 'http://saha.erzincan.bel.tr/staj';
	}
try {
     $dbgln = new PDO("mysql:host=".$host.";dbname=".$db, $user, $pass);
    // mysql_select_db('kskdb', $dbgln);    
} catch ( PDOException $e ){
     echo "db baglantisi yok";
     die();
}

 
$dbgln->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
 //mysql_query("SET NAMES ´latin5´");
// mysql_query("SET CHARACTER SET latin5");  
 //mysql_query("SET NAMES UTF8");

 

?>
