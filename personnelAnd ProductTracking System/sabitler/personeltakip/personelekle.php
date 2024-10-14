<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../../Ayarlar/ayar.php");
function turkce_cevir($metin) {
$metin = trim($metin);
$trharf = array('Ç','ç','Äž','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ',';',',');
$enharf = array('C','c','G','g','i','I','O','o','S','s','U','u','-','-','-');
$turkce = str_replace($trharf,$enharf,$metin);
return $turkce;
}  
 if(isset($_POST['tc'])){
$tc=strip_tags($_POST['tc']);
$ad=strip_tags($_POST['ad']);
$soyad=strip_tags($_POST['soyad']);
$ünvan=strip_tags($_POST['ünvan']);
$il=strip_tags($_POST['il']);
$ilce=strip_tags($_POST['ilce']);
$cinsiyet=strip_tags($_POST['cinsiyet']);
$dogtar=strip_tags($_POST['dogumtar']);
if( empty($tc) || empty($ad) || empty($soyad))
{ echo "<script>alert('Kırmızı alanlar zorunlu alan lütfen doldurunuz!');</script>";header("Refresh: 2; url=$base_url/sabitler/personeltakip/personllistesi.php"); }

else {   
    $query = $dbgln->prepare("INSERT INTO personeller SET
tc = ?,
ad = ?,
soyad = ?,
ünvan = ?,
il = ?,
ilce = ?,
cinsiyet = ?,
dogtar=?
");  
$insert = $query->execute(array(
    $tc, 
    $ad,  
    $soyad,
    $ünvan,
    $il,
    $ilce,
    $cinsiyet,
    $dogtar
));
 header("Refresh: 0; url=".$base_url."/sabitler/personeltakip/personllistesi.php");
}}

?>
<html>   
 <?php 
include("../sabitdiv/ustbolum.php");
?>
    
<head>
    <meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-9" />
    <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>     
     <link href="../../css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/> 
    <link href="../../css/datepicker.css" rel="stylesheet" type="text/css"/>
    <script src="../../js/bootstrap-datepicker.js" type="text/javascript"></script>
   
</head>

<body>

 <div class="bs-example col-lg-12" data-example-id="contextual-table"  >      
      <div class="content-box-header col-lg-12" style="height: 70px; float:left;"  >  
             <h3 class="col-4" style="float:left;" >Personel Ekle</h3>
              <ul class="col-4" style="float:right;" align="right">
	         <a href="<?php echo $base_url; ?>/sabitler/personeltakip/personllistesi.php"  title="Geri Dön"><img src="<?php echo $base_url; ?>/img/Go-back-icon.png" alt="Edit" /> Geri Dön</a>
              </ul>   
     </div>  
       
    <div class="tab-pane active" id="tab13">
        <form  enctype="multipart/form-data" method="post"  style="padding: 20px;"> 
              <div class="col-md-8">
                
                <div class="block block-drop-shadow">                    
                              
                    <div class="content controls" style="height: 600px;">
          
                         <div class="form-row col-md-12 " >
                            <div class="col-md-1"> Tc Kimlik: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="plaka" style="background-color:red;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="Tc Kimlik" aria-describedby="sizing-addon1" name="tc"id="tc" required style="height: 75px;" ></textarea>
                          </div>
                        </div>
                       <br>
                        <div class="form-row col-md-12">
                            <div class="col-md-1">Ad : </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="ad" style="background-color:red;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="Adı" aria-describedby="sizing-addon1" name="ad"id="ad" required style="height: 100px;"></textarea>
                          </div>
                        </div>   
                          <br>
                       <div class="form-row col-md-12">
                            <div class="col-md-1"> Soyad: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="soyad" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="Soyadı" aria-describedby="sizing-addon1" name="soyad"id="soyad"style="height: 100px;"></textarea>
                          </div>
                        </div>  
                          
                          <br>
                           <div class="form-row col-md-12">
                            <div class="col-md-1"> Ünvanı: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="ünvan" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="Ünvanı" aria-describedby="sizing-addon1" name="ünvan"id="ünvan"style="height: 100px;"><?php echo $str["aciklama"]; ?></textarea>
                          </div>
                        </div>   
                          <br>
                           <div class="form-row col-md-12">
                            <div class="col-md-1"> İl: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="il" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="İl" aria-describedby="sizing-addon1" name="il"id="il"style="height: 100px;"><?php echo $str["aciklama"]; ?></textarea>
                          </div>
                        </div>
                          <br>
                           <div class="form-row col-md-12">
                            <div class="col-md-1"> İlçe: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="ilce" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="İlçe" aria-describedby="sizing-addon1" name="ilce"id="ilce"style="height: 100px;"><?php echo $str["aciklama"]; ?></textarea>
                          </div>
                        </div>   
                          <br>
                          <div class="form-row col-md-12"><br>
                           <div class="col-md-1"> Cinsiyet: </div>                          
                                 <div class="btn-group bootstrap-select ">    
                                     <select class="form-control selectpicker"  tabindex="-98" name="cinsiyet"  id="cinsiyet" >
                                    <option <?php if($str1["cinsiyet"]=="Erkek"){ echo " selected "; } ?> value="Erkek"  >Erkek</option>
                                    <option <?php if($str1["cinsiyet"]=="Kadı") { echo " selected "; } ?> value="Kadın">Kadın</option>                                  
                                  </select>
                                </div>      
                        </div>  
                          <br>
                          <div class="form-row col-md-12 " >
                            <div class="col-md-1">Doğum Tarihi: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="dogumtar" style="background-color:blue;" >@</span>
                                <br /><input type="date" class="form-control" name="dogumtar"id="dogumtar" >                           
                          </div>
                        </div>
                          <br>
                                <span  class='label label-info' id="upload-file-info"  ></span>
                                 <div style="padding: 10px;"> </div>
                                 <div class="col-md-2"  align="center">
                                     <ul class="col-md-2"  >
                                      <button type="submit" class="btn btn-success"  name="kaydet" id="kaydet" style="margin-right: 100%;" >Kaydet</button>  
                                  </ul>
                                 </div>
                      
                          
                    </div>
                    
                   
                    
                </div>
                
            </div>        
         </form>   
  </div>
         
  </div>  
 
 </body>

</html>
<?php 

include("../sabitdiv/altbolum.php");

?>
<!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../js/demo/chart-area-demo.js"></script>
  <script src="../../js/demo/chart-pie-demo.js"></script>