<?php 
include("../sabitdiv/ustbolum.php");
include("../../Ayarlar/ayar.php");
?>
<?php 
if(isset($_GET['id'])){
    $idimiz=$_GET['id'];  
    $tc=$_POST['tc'];
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $ünvan=$_POST['ünvan'];
    $il=$_POST['il'];
    $ilce=$_POST['ilce'];
    $cinsiyet=$_POST['cinsiyet'];
    $dogtar=$_POST['dogtar'];
   
if( empty($tc) || empty($ad) )
{ }
 else {
      $query = $dbgln->prepare("UPDATE personeller SET
tc  = ?,
ad  = ?,
soyad = ?,
ünvan=?,
il=?,
ilce=?,
cinsiyet=?,
dogtar=?
WHERE id=?
");  
  $insert = $query->execute(array(
    $tc,
    $ad,
    $soyad,
    $ünvan,
    $il,
    $ilce,
    $cinsiyet,
    $dogtar,
    $idimiz
));
  header("Refresh: 0; url=".$base_url."/sabitler/personeltakip/personllistesi.php");
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
             <h3 class="col-4" style="float:left;" >Personel Düzelt</h3>
              <ul class="col-4" style="float:right;" align="right">
	         <a href="<?php echo $base_url; ?>/sabitler/personeltakip/personllistesi.php"  title="Geri Dön"><img src="<?php echo $base_url; ?>/img/Go-back-icon.png" alt="Edit" /> Geri Dön</a>
              </ul>   
     </div>  
      <div class="tab-pane active" id="tab13">
        <form  enctype="multipart/form-data" method="post"  style="padding: 20px;"> 
              <div class="col-md-8">
                
                <div class="block block-drop-shadow">                    
                             <?php 
                              $sorgu = $dbgln->query("SELECT *  FROM personeller WHERE id='$idimiz'");
                               foreach ( $sorgu as $str ){
                             
                              ?>
                    <div class="content controls" style="height: 600px;">
          
                         <div class="form-row col-md-12 " >
                            <div class="col-md-1"> Tc: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="tc" style="background-color:red;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="Tc Kimlik" aria-describedby="sizing-addon1" name="tc"id="tc" required style="height: 75px;" ><?php echo $str["tc"]; ?></textarea>
                          </div>
                        </div>
                       <br>
                        <div class="form-row col-md-12">
                            <div class="col-md-1">Adı : </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="ad" style="background-color:red;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="Adı" aria-describedby="sizing-addon1" name="ad"id="ad" required style="height: 100px;"><?php echo $str["ad"]; ?></textarea>
                          </div>
                        </div>   
                          <br>
                       <div class="form-row col-md-12">
                            <div class="col-md-1"> Soyad: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="soyad" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="Soyad" aria-describedby="sizing-addon1" name="soyad"id="soyad"style="height: 100px;"><?php echo $str["soyad"]; ?></textarea>
                          </div>
                        </div>   
                          <br>
                           <div class="form-row col-md-12">
                            <div class="col-md-1"> Ünvanı: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="ünvan" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="Ünvanı" aria-describedby="sizing-addon1" name="ünvan"id="ünvan"style="height: 100px;"><?php echo $str["ünvan"]; ?></textarea>
                          </div>
                        </div>   
                         <br>
                           <div class="form-row col-md-12">
                            <div class="col-md-1"> İl: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="il" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="İl" aria-describedby="sizing-addon1" name="il"id="il"style="height: 100px;"><?php echo $str["il"]; ?></textarea>
                          </div>
                        </div>   
                         <br>
                           <div class="form-row col-md-12">
                            <div class="col-md-1"> İlçe: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="ilce" style="background-color:blue;" >@</span>
                                <textarea type="text"  class="form-control" placeholder="İlçe" aria-describedby="sizing-addon1" name="ilce"id="ilce"style="height: 100px;"><?php echo $str["ilce"]; ?></textarea>
                          </div>
                        </div>  
                          <br>
                          <div class="form-row col-md-12"><br>
                           <div class="col-md-1"> Cinsiyet: </div>                          
                                 <div class="btn-group bootstrap-select ">    
                                   <select class="form-control selectpicker"  tabindex="-98" name="cinsiyet"  id="cinsiyet" >
                                    <option <?php if($str["cinsiyet"]=="Erkek"){ echo " selected "; } ?> value="Erkek" >Erkek</option>
                                    <option <?php if($str["cinsiyet"]=="Kadın"){ echo " selected "; } ?>value="Kadın">Kadın</option>   
                                   
                                  </select>
                                </div>      
                        </div>  
                         <br>
                           <div class="form-row col-md-12 " >
                            <div class="col-md-1">Doğum Tar: </div>
                           <div class="input-group col-md-10">
                                <span class="input-group-addon" id="dogtar" style="background-color:blue;" >@</span>
                                <br /><input type="date" class="form-control" name="dogtar"id="dogtar" value="<?php echo $str["dogtar"]; ?>" placeholder="">                           
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