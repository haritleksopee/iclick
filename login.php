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
      <h2 class="text-center login-color mt-4">สวัสดี!</h2>
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


                    <div class="form-group row pt-3">
                      <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center">
                        <label class="col-form-label ">รหัสผ่าน</label>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 ">
                        <input type="password" class=" login-from">
                      </div>
                    </div>

                    <div class="text-center">
                      <a href="#">ลืมรหัสผ่าน</a>
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
                    <div class="col-lg-4 col-md-6 col-12 ">
                    <div class="text-center re-top ">
                      <button type="button" class="btn regidter-btn-facebook login-face-whit">
                        <i class="fab fa-facebook-f"></i>
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
                      <button type="button" class="btn w100 register-btn-gmail ">
                        <i class="fab fa-google Register-icon Register-icon1 "></i>
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


