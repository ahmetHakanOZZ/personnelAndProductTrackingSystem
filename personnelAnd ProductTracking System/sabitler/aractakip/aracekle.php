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
 if(isset($_POST['plaka'])){
$plaka=strip_tags($_POST['plaka']);
$marka=strip_tags($_POST['marka']);
$model=strip_tags($_POST['model']);
$fiyat=strip_tags($_POST['fiyat']);
if( empty($plaka) || empty($marka) )
{ echo "<script>alert('Kırmızı alanlar zorunlu alan lütfen doldurunuz!');</script>";header("Refresh: 2; url=$base_url/sabitler/aractakip/araclistesi.php"); }

else {   
    $query = $dbgln->prepare("INSERT INTO araclar SET
plaka = ?,
marka = ?,
model = ?,
fiyat=?
");  
$insert = $query->execute(array(
    $plaka, 
    $marka,  
    $model,
    $fiyat   
));
 header("Refresh: 0; url=".$base_url."/sabitler/aractakip/araclistesi.php");
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
             <h3 class="col-4" style="float:left;" >Araç Ekle</h3>
              <ul class="col-4" style="float:right;" align="right">
	         <a href="<?php echo $base_url; ?>/sabitler/aractakip/araclistesi.php"  title="Geri Dön"><img src="<?php echo $base_url; ?>/img/Go-back-icon.png" alt="Edit" /> Geri Dön</a>
              </ul>   
     </div>  
       
    <div class="tab-pane active" id="tab13">
        <form  enctype="multipart/form-data" method="post"  style="padding: 20px;"> 
              <div class="col-md-8">
                
                <div class="block block-drop-shadow">                    
                              
                    <div class="content controls" style="height: 600px;">
          
                         <div class="form-row col-md-12 " >
                            <div class="col-md-1"> Plaka: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="plaka" style="background-color:red;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="plaka" aria-describedby="sizing-addon1" name="plaka"id="plaka" required style="height: 75px;" ></textarea>
                          </div>
                        </div>
                       <br>
                        <div class="form-row col-md-12">
                            <div class="col-md-1">Marka : </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="marka" style="background-color:red;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="marka" aria-describedby="sizing-addon1" name="marka"id="marka" required style="height: 100px;"></textarea>
                          </div>
                        </div>   
                          <br>
                       <div class="form-row col-md-12">
                            <div class="col-md-1"> Model: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="model" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="model" aria-describedby="sizing-addon1" name="model"id="model"style="height: 100px;"></textarea>
                          </div>
                        </div>   
                          <br>
                           <div class="form-row col-md-12">
                            <div class="col-md-1"> Fiyat: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="fiyat" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="fiyat" aria-describedby="sizing-addon1" name="fiyat"id="fiyat"style="height: 100px;"><?php echo $str["aciklama"]; ?></textarea>
                          </div>
                        </div>   
                         
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