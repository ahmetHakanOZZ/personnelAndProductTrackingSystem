<!DOCTYPE html>
<html lang="en">
 <?php 
include("../../Ayarlar/ayar.php");

ob_start();
session_start();
if(!isset($_SESSION["login"])){
    header("Location:../../index.php");
}
else {
}
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Araç Takip</title>
 <link rel="icon" type="image/png" href="../../../img/ksklogo.jpeg"/>
  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">      
  <link href="../../https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
      
      
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo $base_url; ?>/sabitler/aractakip/araclistesi.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Araç Takip</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>/sabitler/aractakip/araclistesi.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Araç Takip</span></a>
      </li>

      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>/sabitler/personeltakip/personllistesi.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Personel</span></a>
      </li>
     

      <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
         <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
                             
           
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                
              
                
                <span class="badge badge-danger badge-counter">2</span>
                
               
             
              </a>
                
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Mesaj Kutusu
                </h6>
                  
                <a class="dropdown-item d-flex align-items-center" href="sdsa/admin/sabitler/iletisim/iletisimoku.php?id=<?php echo $str["id"]; ?> ">                 
                  <div class="font-weight-bold">
                    <div class="text-truncate">dsasd</div>
                    <div class="small text-gray-500">dsada</div>
                  </div>
                </a>
              
                <a class="dropdown-item text-center small text-gray-500" href="dsfsd/admin/sabitler/iletisim/iletisim.php">Tüm Mesajları Oku</a>
              </div>
            </li>
             
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            
              <?php
              
                                                     
	                        $userid = $_SESSION["user_id"];                                   
                                $sorgu = $dbgln->query("SELECT * FROM kullanicilar WHERE id='$userid'");
                                 foreach ( $sorgu as $str ){
                                     
                                    ?>
                         <?php
                             $logolarresimler = $base_url."/resimler/profil/".$str["profil"];
                             ?>    
                                    
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Profil & Çıkış</span>
                <img class="img-profile rounded-circle" src="<?php echo $logolarresimler;?>">
              </a>
                    
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo $base_url; ?>/sabitler/profil/profil.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Güvenli Çıkış
                </a>
              </div>
            </li>
 <?php  } ?> 
          </ul>

        </nav>
                 
 
        
        
        
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
      