<?php
session_start();
ob_start();
session_destroy();
echo "<center>Cikis Yaptiniz. Ana Sayfaya Yonlendiriliyorsunuz.</center>";
if($_SERVER['SERVER_NAME'] != '10.91.0.50')
{
header("Refresh: 2; url=http://localhost//staj");
}
else
{
header("Refresh: 2; url=http://localhost/staj");
}

ob_end_flush();
?>