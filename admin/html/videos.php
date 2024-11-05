<?php
require('../include/top.inc.php');

isAdmin();
$link = '';

// $hash_tag = '';
$msg = '';
// $order_no=0;
$image_required = 'required';
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "select * from videos where id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $link = $row['link'];
        
        
    } else {
        header('location:manage_videos.php');
        die();
    }
}

if (isset($_POST['submit'])) {
    // prx($_POST);
    $link = get_safe_value($con, $_POST['link']);
   
    
    $msg = "";

    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {
                $update_query = "UPDATE `videos` SET `link`='$link' WHERE `id`='$id'";
                
                mysqli_query($con, $update_query);
        } else {
            $insert_query = "INSERT INTO `videos`(`link`) 
            VALUES ('$link')";
            mysqli_query($con, $insert_query);
        }
        header('location:manage_videos.php');
        die();
    }
}
?>

<?php 
include("../include/head.inc.php")
?>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">videos</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index ">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                            videos 
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="
    height: calc(100vh - 120px);">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class=" col-md-8 m-auto  bg-white">
                <div class="card">
                    <div class="card-header"><strong>videos</strong><small> Form</small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">
                            
                           
                            <div class="form-group">
                                <label for="link" class=" form-control-label">Link</label>
                                <input type="text" name="link" placeholder="Enter Link" class="form-control" required value="<?php echo $link ?>">
                            </div>
                           
                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Submit</span>
                            </button>
                            <div class="field_error"><?php echo $msg ?></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
  /****************************************
   *       Basic Table                   *
   ****************************************/
  $("#zero_config").DataTable();
</script>
<script src="../ckeditor/ckeditor.js"></script>
<script src="../ckfinder/ckfinder.js"></script>
<script>
      var editor=CKEDITOR.replace('editor1');
        CKFinder.setupCKEditor(editor);
</script>
</body>

</html>
