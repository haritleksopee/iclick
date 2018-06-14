<!doctype html>
<html lang="en">

  <head>
    <!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
  </head>

  <body>
  <!-- START NAVBAR -->
    <?php include_once('inc/navbar.php'); ?>
    <!-- END NAVBAR -->
    <div class="wrapper">
    <!-- CONTENT -->
    <div class="container">
      <h1 class="text-center login-color mt-4">สวัสดี!</h1>
        <div class="row ">  
          <div class="col-lg-12">
                <form>
                    <div class="form-group row pt-3">
                      <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center">
                        <label class="col-form-label ">ชื่อผู้ใช้งาน</label>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 ">
                        <input type="text"  class=" login-from">
                      </div>
                    </div>


                    <div class="form-group row pt-3 login-top-1">
                      <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center">
                        <label class="col-form-label ">รหัสผ่าน</label>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 ">
                        <input type="password" class=" login-from">
                      </div>
                    </div>

                    <div class="text-center login-414-rep">
                      <a class="logic-color-blu" href="#">ลืมรหัสผ่าน</a>
                    </div>


                    <div class="form-group row pt-3">
                      <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center">
                        <label class="col-form-label "></label>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 ">
                        <div class="text-center">
                           <button type="button" class="btn btn-blue login-lo">LOGIN</button>
                        </div>
                      </div>
                    </div>



                    <div class="form-group row pt-3 ">
                      <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center ">
                        <label class="col-form-label text-lightblue login-text-cen"></label>
                      </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-lg-4">
                    <div class="text-center re-top ">
                      <button type="button" class="btn regidter-btn-facebook login-face-whit">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <font class="re-tap ">Sing Up with Facebook</font>
                      </button> 
                    </div>
                  </div>
               </div>


                    <div class="form-group row pt-3">
                      <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center ">
                        <label class="col-form-label text-lightblue login-text-cen"></label>
                        </div>
                    <div class="col-lg-4 col-md-6 col-12 ">
                    <div class="text-center re-top">
                      <button type="button" class="btn login-goog-whit ">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                        <font class="re-tap ">Sing Up with google</font>
                      </button>
                    </div>
                  </div>
                </div>
             </form>
          </div>
        </div>
    </div>
    <!-- END CONTENT -->
    </div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>


