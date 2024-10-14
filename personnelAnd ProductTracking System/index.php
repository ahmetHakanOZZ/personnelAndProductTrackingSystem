<?php 
ob_start();
session_start();
$base_url	= 'http://localhost/staj';
if(!empty( $_SESSION["user_id"])){
   header("Location:$base_url/sabitler/aractakip/araclistesi.php");
   exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"></link>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"></link>
    <link href="css/sb-admin-2.min.css" rel="stylesheet"></link>    
</head>
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Hoş Geldiniz!</h1>
                  </div>
                  <form name="loginform" id="loginform" action="Ayarlar/login.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="kullaniciadi" id="user_login" aria-describedby="emailHelp" placeholder="Kullanıcı Adınız...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="sifre" id="user_pass" placeholder="Şifreniz">
                    </div>
                    <div class="form-group">
                     
                    </div>
                    <button  class="btn btn-primary btn-user btn-block">
                      Login
                  </button>                  
                   
                  </form>
                
                 
               
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

</body>
</html>
