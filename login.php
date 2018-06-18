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
                    <div class="form-group row ">
                      <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center">
                        <label class="col-form-label ">ชื่อผู้ใช้งาน</label>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 ">
                        <input type="text"  class=" login-from login-mar-bottom">
                      </div>
                    </div>


                    <div class="form-group row  login-top-1">
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


                    <div class="form-group row ">
                      <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center">
                        <label class="col-form-label "></label>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 ">
                        <div class="text-center">
                           <button type="button" class="btn btn-blue bnt-purple">LOGIN</button>
                        </div>
                      </div>
                    </div>



                    <div class="form-group row  ">
                      <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center ">
                        <label class="col-form-label text-lightblue login-text-cen"></label>
                      </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-lg-4">
                    <div class="text-center re-top ">
                      <button type="button" class="btn signup-btn-facebook width100" style="height: 50px;">
                        <span class="login-facebook-icon"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
                        <span class="login-facebook-text">Sign Up with Facebook</span>
                      </button>
                    </div>
                  </div>
               </div>


                <div class="form-group row ">
                    <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center ">
                      <label class="col-form-label text-lightblue login-text-cen"></label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 ">
                      <div class="text-center re-top ">
                        <button type="button" class="btn signup-btn-gmail width100" style="height: 50px;">
                          <span class="login-gmail-icon"><i class="fa fa-google" aria-hidden="true"></i></span>
                          <span class="login-gmail-text">Sign Up with Google</span>
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


