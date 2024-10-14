<?php 
ob_start();
session_start();
include("ayar.php");
$kadi = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];
$sifremd5=md5($sifre);
$aktif=1;

$sql_check = $dbgln->prepare("select * from kullanicilar where kul_adi=:kul_kul_ad and kul_sifre=:kul_sifre") or die(mysql_error());
$sql_check->execute(array(
        "kul_kul_ad" => $kadi,
        "kul_sifre" => $sifremd5
    ));                               
 foreach ( $sql_check as $str ){

    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifremd5;      
    $_SESSION["user_id"]=$str['id']; 
    $_SESSION["aktiflik"]=$str["aktiflik"]; 
  }
if($_SESSION["aktiflik"]=="0"){
     echo "<center>Kullanıcınız Akif Değil Giriş Yetkiniz Bulunmamaktadır.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";   
    session_destroy();
     
}
 else {
         header("Location:$base_url/sabitler/aractakip/araclistesi.php");
    }
	if($kadi=="" or $sifre=="") {
		echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";   
                
	}          
      else {
		echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";  
               
	}

ob_end_flush();
?>