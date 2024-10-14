<?php 
include("../sabitdiv/ustbolum.php");
include("../../Ayarlar/ayar.php");
?>
<?php 
if(isset($_GET['id'])){
    $idimiz=$_GET['id'];  
    $plaka=$_POST['plaka'];
    $marka=$_POST['marka'];
    $model=$_POST['model'];
    $fiyat=$_POST['fiyat'];
   
if( empty($plaka) || empty($marka) )
{ }
 else {
      $query = $dbgln->prepare("UPDATE araclar SET
plaka  = ?,
marka  = ?,
model  = ?,
fiyat=?
WHERE id=?
");  
  $insert = $query->execute(array(
    $plaka, 
    $marka, 
    $model,
    $fiyat,    
    $idimiz
));
  header("Refresh: 0; url=".$base_url."/sabitler/aractakip/araclistesi.php");
 }
}

?>
 <script src="../../js/acılırmenü.js" type="text/javascript"></script> 
 <link href="../../css/reset.css" rel="stylesheet" type="text/css"/> 
 <link href="../../css/reset.css" rel="stylesheet" type="text/css"/> 
 
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>  
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" type="text/css"/> 
 <link href="../../css/sb-admin-2.min.css" rel="stylesheet" type="text/css"/>  
 <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/> 
 <body id="page-top">
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
                             <?php 
                              $sorgu = $dbgln->query("SELECT *  FROM araclar WHERE id='$idimiz'");
                               foreach ( $sorgu as $str ){
                             
                              ?>
                    <div class="content controls" style="height: 600px;">
          
                         <div class="form-row col-md-12 " >
                            <div class="col-md-1"> Plaka: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="plaka" style="background-color:red;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="plaka" aria-describedby="sizing-addon1" name="plaka"id="plaka" required style="height: 75px;" ><?php echo $str["plaka"]; ?></textarea>
                          </div>
                        </div>
                       <br>
                        <div class="form-row col-md-12">
                            <div class="col-md-1">Marka : </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="marka" style="background-color:red;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="marka" aria-describedby="sizing-addon1" name="marka"id="marka" required style="height: 100px;"><?php echo $str["marka"]; ?></textarea>
                          </div>
                        </div>   
                          <br>
                       <div class="form-row col-md-12">
                            <div class="col-md-1"> Model: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="model" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="model" aria-describedby="sizing-addon1" name="model"id="model"style="height: 100px;"><?php echo $str["model"]; ?></textarea>
                          </div>
                        </div>   
                          <br>
                           <div class="form-row col-md-12">
                            <div class="col-md-1"> Fiyat: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="fiyat" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="fiyat" aria-describedby="sizing-addon1" name="fiyat"id="fiyat"style="height: 100px;"><?php echo $str["fiyat"]; ?></textarea>
                          </div>
                        </div>   
                         
                                <span  class='label label-info' id="upload-file-info"  ></span>
                                 <div style="padding: 10px;"> </div>
                                 <div class="col-md-2"  align="center">
                                     <ul class="col-md-2"  >
                                      <button type="submit" class="btn btn-success"  name="güncelle" id="güncelle" style="margin-right: 100%;" >Güncelle</button>  
                                  </ul>
                                 </div>
                      
                          
                    </div>
                    
                  <?php  } ?> 
                    
                </div>
                
            </div>        
         </form>   
  </div>
  
  <?php 

include("../sabitdiv/altbolum.php");

?>

       <script>
      function duyuruguncelle(id){
          var formverisi='id='+id;         
          var degerler =formverisi;
          $.ajax({
              type:"POST",
              url:"galeriduzelt.php",
              data:degerler       
                
        });          
      }
    </script>  
    <script>
        
		$(document).ready(function(){
		$('.habersil').click(function(){
 
			var degisken = $(this);
			var silbeni  = degisken.attr('id');
                        var silhaberid ="sildengelen";
			var veri      = "silhaberid="+silhaberid+"&id=" + silbeni;			
		 	if(confirm("Silmek İstediğinizden Emin misiniz ?"))	{
				$.ajax({
				   type: "POST",
				   url: "galerisil.php",
				   data: veri,
				   success: function(deg){
                                $('.haberguncelle').html(deg);
                            },
                              error: function(){}    
			 	});                             
                               $(this).parents(".temizle").animate({backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");   
                              
			}                   
		  	   
    		return false;  
           
		});
	});
    
    </script>  
   <script src="../../vendor/jquery/jquery.min.js" type="text/javascript"></script>
     <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
     <script src="../../vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>
     <script src="../../js/sb-admin-2.min.js" type="text/javascript"></script>    
     <script src="../../vendor/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
     <script src="../../vendor/datatables/dataTables.bootstrap4.min.js" type="text/javascript"></script>
     <script src="../../js/demo/datatables-demo.js" type="text/javascript"></script>
 </body>