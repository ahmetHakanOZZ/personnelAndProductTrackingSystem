<?php 
include("../sabitdiv/ustbolum.php");
?>
 <script src="../../js/acılırmenü.js" type="text/javascript"></script> 
 <link href="../../css/reset.css" rel="stylesheet" type="text/css"/> 
 <link href="../../css/reset.css" rel="stylesheet" type="text/css"/> 
 
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>  
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" type="text/css"/> 
 <link href="../../css/sb-admin-2.min.css" rel="stylesheet" type="text/css"/>  
 <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/> 
 <body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                  <div class="card shadow mb-lg-4 ">
            <div class="content-box-header card-header py-3 "  >
           
              <h6 class="m-0 font-weight-bold text-primary col-4" style=" float:left;">Personel Listesi</h6>
               
              <ul class="col-4" style="float:right;" align="right">
		<li><a href="<?php echo $base_url; ?>/sabitler/personeltakip/personelekle.php"  title="Yeni Kayıt"><img src="<?php echo $base_url; ?>/img/habericon.png" alt="Edit" /> Yeni Kayıt</a></li>                
             </ul>
           
            </div>
     
            <div class="card-body ">
              <div class="table-responsive">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tc Kimlik</th>
                      <th>Ad Soyad</th>
                      <th>Ünvanı</th>
                      <th>İl</th>
                      <th>İlçe</th>                      
                      <th>cinsiyet</th>     
                      <th>Doğum Tar</th>    
                      <th>İşlem</th>     
                    </tr>                 
                  </thead>
                 <tbody class="temizle"> 
                  <?php
      $sorgu = $dbgln->query("SELECT *  FROM personeller ORDER BY id desc");

                               foreach ( $sorgu as $str )
                                {
                                    
                                   
        ?>       
                  
                                  
                      <tr>                     
                      <td><?php echo $str["tc"]; ?></td>
                      <td><?php echo $str["ad"]; ?> <?php echo $str["soyad"]; ?></td>
                      <td><?php echo $str["ünvan"]; ?></td>
                      <td><?php echo $str["il"]; ?></td>   
                      <td><?php echo $str["ilce"]; ?></td>
                      <td><?php echo $str["cinsiyet"]; ?></td>
                      <td><?php echo $str["dogtar"]; ?></td>
                      <td>                     
                          <a  href="<?php echo $base_url; ?>/sabitler/personeltakip/personelduzelt.php?id=<?php echo $str["id"]; ?> " title="Güncelle"><img src="<?php echo $base_url; ?>/img/pencil.png" alt="Düzelt" /></a>
		          <a  class="personelsil" data-toggle="modal" data-target="#personelsil"  id="<?php echo $str["id"]; ?>" onClick="window.location.reload()" title="Sil"><img src="<?php echo $base_url; ?>/img/cross.png" alt="Sil" /></a> 	
                           
                      </td>
                    </tr>                 
                                      
               <?php  } ?>                   
              </tbody> 
         
                </table>
              </div>
            </div>
         </div>    
                 </div>
                
            </div>            
        </div>        
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
		$('.personelsil').click(function(){
 
			var degisken = $(this);
			var silbeni  = degisken.attr('id');
                        var silaracid ="sildengelen";
			var veri      = "silaracid="+silaracid+"&id=" + silbeni;			
		 	if(confirm("Silmek İstediğinizden Emin misiniz ?"))	{
				$.ajax({
				   type: "POST",
				   url: "personelsil.php",
				   data: veri,
				   success: function(deg){
                                $('.temizle').html(deg);
                                $(this).parents(".temizle").animate({backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");   
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