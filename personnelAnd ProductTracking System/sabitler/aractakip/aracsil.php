<?php

if (isset($_POST['id'])) {  
       include("../../Ayarlar/ayar.php");
        $id = $_POST['id'];      
        
	if($id) {
          
           $sql = $dbgln->query("DELETE FROM araclar WHERE id= '$id' ") or die(mysql_error());
        
	}    
}

?>
