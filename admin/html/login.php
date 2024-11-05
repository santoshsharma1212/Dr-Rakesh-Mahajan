 <?php
  require('../include/connection.inc.php');
  require('../include/functions.inc.php');
  $msg = '';
  if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];
    $sql = "select * from admin where `username`='$username' and password='$password'";


    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
      $row = mysqli_fetch_assoc($res);
      if ($row['status'] == '0') {
        $msg = "Account deactivated";
      } else {
        $_SESSION['ADMIN_LOGIN'] = 'yes';
        $_SESSION['ADMIN_ID'] = $row['id'];
        $_SESSION['ADMIN_USERNAME'] = $username;
        $_SESSION['ADMIN_ROLE'] = $row['role'];
        header('location:index.php');
        die();
      }
    } else {
      $msg = "Please enter correct login details";
    }
  }
  ?>

 <!DOCTYPE html>
 <html dir="ltr">

 <head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />


   <title>Dr.Rakesh Mahajan</title>
   <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="../../img/logo.webp" />
   <!-- Custom CSS -->
   <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
   <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
   <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
   <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
   <!-- Custom CSS -->
   <link href="../dist/css/style.min.css" rel="stylesheet" />
   <link href="../dist/css/new-style.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
   <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
   <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />

 </head>
 <div class="page-wrapper">

   <body class="bg-light">
     <div class="main-wrapper">
       <div class="preloader">
         <div class="lds-ripple">
           <div class="lds-pos"></div>
           <div class="lds-pos"></div>
         </div>
       </div>
       <div class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
          bg-light
          py-5
        ">
         <div class="auth-box bg-light border-top border-bottom py-4 border-secondary">
           <div id="loginform">
             <div class="text-center pb-3">
               <span class="db"><img src="../../assets/img/logo/KH-logo-new.webp" width="100" alt="logo" /></span>
             </div>
             <!-- Form -->
             <form class="form-horizontal mt-3" id="loginform" method="post">
               <div class="row pb-4">
                 <div class="col-12">
                   <div class="input-group mb-3">
                     <div class="input-group-prepend">
                       <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="mdi mdi-account fs-4"></i></span>
                     </div>
                     <input type="text" name="name" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="" />
                   </div>
                   <div class="input-group mb-3">
                     <div class="input-group-prepend">
                       <span class="input-group-text bg-warning text-white h-100" id="basic-addon2"><i class="mdi mdi-lock fs-4"></i></span>
                     </div>
                     <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="" />
                   </div>
                 </div>
               </div>
               <div class="row border-secondary">
                 <div class="col-12">
                   <div class="form-group">
                     <div class="pt-3">
                       <button class="btn btn-success float-end text-white" type="submit" name="submit">
                         Login
                       </button>
                     </div>
                   </div>
                 </div>
               </div>
             </form>
             <div class="text-danger"><?php echo $msg ?></div>
           </div>
         </div>
       </div>
     </div>
     <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
     <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
     <script>
       $(".preloader").fadeOut();
       $("#to-recover").on("click", function() {
         $("#loginform").slideUp();
         $("#recoverform").fadeIn();
       });
       $("#to-login").click(function() {
         $("#recoverform").hide();
         $("#loginform").fadeIn();
       });
     </script>
   </body>

 </html>