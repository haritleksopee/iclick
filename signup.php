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
      <div class="home-size-web">
        <div class="col-12 text-center text-purple">
          <h1 style="font-weight: 600;">ยินดีต้อนรับ</h1>   
          <div class="text-md-right text-center">
            <button type="button" class="btn bnt-purple signup-bnt">สมัคร Affliate</button>
          </div>
          <hr class="signup-hr">
        </div>
        <!-- ------------------- FROME --------------------- -->

        <div class="row">
          <div class="col-lg-6 col-12">
            <form>


              <div class="form-group row signup-distance-y">
                <div class="col-xl-2 col-lg-4 col-md-3 col-12 text-md-right text-center">
                  <label class="col-form-label signup-font-sizt-16">คำนำหน้า*</label>
                </div>
                <div class="col-xl-10 col-lg-8 col-md-9 col-12">
                  <select class="profile-form signup-from-select signup-select">
                      <option>นาย</option>
                      <option>นางสาว</option>
                      <option>นาง</option>
                  </select>
                </div>
              </div>


              <div class="form-group row signup-distance-y">
                <div class="col-xl-2 col-lg-4 col-md-3 col-12 text-md-right text-center">
                  <label class="col-form-label signup-font-sizt-16">ชื่อ*</label>
                </div>
                <div class="col-xl-10 col-lg-8 col-md-9 col-12">
                    <input type="text" class="profile-form signup-from-input" name="name">
                </div>
              </div>


              <div class="form-group row signup-distance-y">
                <div class="col-xl-2 col-lg-4  col-md-3 col-12 text-md-right text-center">
                  <label class="col-form-label signup-font-sizt-16">นามสกุล*</label>
                </div>
                <div class="col-xl-10 col-lg-8  col-md-9 col-12">
                    <input type="text" class="profile-form signup-from-input" name="name">
                </div>
              </div>

              <div class="form-group row signup-distance-y">
                <div class="col-xl-2 col-lg-4  col-md-3 col-12 text-md-right text-center">
                  <label class="col-form-label signup-font-sizt-16">เบอร์โทร*</label>
                </div>
                <div class="col-xl-10 col-lg-8  col-md-9 col-12">
                    <input type="text" class="profile-form signup-from-input" name="name">
                </div>
              </div>


              <div class="form-group row signup-distance-y">
                <div class="col-xl-2 col-lg-4  col-md-3 col-12 text-md-right text-center">
                  <label class="col-form-label signup-font-sizt-16">อีเมล</label>
                </div>
                <div class="col-xl-10 col-lg-8  col-md-9 col-12">
                    <input type="email" class="profile-form signup-from-input" name="name">
                </div>
              </div>

              <div class="form-group row signup-distance-y">
                <div class="col-xl-2 col-lg-4  col-md-3 col-12 text-md-right text-center">
                  <label class="col-form-label signup-font-sizt-16">ไลน์ ไอดี</label>
                </div>
                <div class="col-xl-10 col-lg-8  col-md-9 col-12">
                    <input type="text" class="profile-form signup-from-input" name="name">
                </div>
              </div>


            </form>
          </div> <!-- LEFT -->
          <div class="col-lg-6 col-12">
             <form>
                <div class="form-group row signup-distance-y">
                  <div class="col-xl-2 col-lg-4  col-md-3 col-12 text-md-right text-center">
                    <label class="col-form-label signup-font-sizt-16">ที่อยู่ 1*</label>
                  </div>
                  <div class="col-xl-10 col-lg-8  col-md-9 col-12">
                      <input type="text" class="profile-form signup-from-input" name="name">
                  </div>
                </div>


                <div class="form-group row signup-distance-y">
                  <div class="col-xl-2 col-lg-4  col-md-3 col-12 text-md-right text-center">
                    <label class="col-form-label signup-font-sizt-16">จังหวัด*</label>
                  </div>
                  <div class="col-xl-10 col-lg-8  col-md-9 col-12">
                    <select class="profile-form signup-from-input signup-select">
                        <option></option>
                        <option>กรุงเทพมหานคร</option>
                        <option>สิงห์บุรี</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row signup-distance-y">
                  <div class="col-xl-2 col-lg-4  col-md-3 col-12 text-md-right text-center">
                    <label class="col-form-label signup-font-sizt-16">อำเภอ*</label>
                  </div>
                  <div class="col-xl-10 col-lg-8  col-md-9 col-12">
                    <select class="profile-form signup-from-input signup-select">
                        <option></option>
                        <option>เมือง</option>
                        <option>อินทร์บุรี</option>
                    </select>
                  </div>
                </div>  

                <div class="form-group row signup-distance-y">
                  <div class="col-xl-2 col-lg-4  col-md-3 col-12 text-md-right text-center">
                    <label class="col-form-label signup-font-sizt-16">รหัสไปรษณีย์*</label>
                  </div>
                  <div class="col-xl-10 col-lg-8  col-md-9 col-12">
                      <input type="text" class="profile-form signup-from-input" name="name">
                  </div>
                </div>

                <div class="form-group row signup-distance-y">
                  <div class="col-xl-12 text-md-right text-center">
                    <button type="button" class="profile-add" style="margin-right: 0px;"><i class="fa fa-plus" aria-hidden="true"></i></button>
                  </div>
                </div>

             </form>
          </div> <!-- RIGHT -->
        </div>


          <div class="col-12">
            <div>
              <hr class="signup-hr">
            </div>
          </div>


        <div class="row">
              <div class="col-lg-6 col-12">
                 <form>
                    <div class="form-group row signup-distance-y">
                      <div class="col-xl-2 col-lg-4  col-md-3 col-12 text-md-right text-center">
                        <label class="col-form-label signup-font-sizt-16">ชื่อผู้ใช้งาน</label>
                      </div>
                      <div class="col-xl-10 col-lg-8  col-md-9 col-12">
                          <input type="text" class="profile-form signup-from-input" name="name">
                      </div>
                    </div>


                    <div class="form-group row signup-distance-y">
                      <div class="col-xl-2 col-lg-4  col-md-3 col-12 text-md-right text-center">
                        <label class="col-form-label signup-font-sizt-16">รหัสผ่าน</label>
                      </div>
                      <div class="col-xl-10 col-lg-8  col-md-9 col-12">
                          <input type="password" class="profile-form signup-from-input" name="name">
                      </div>
                    </div>


                    <div class="form-group row signup-distance-y">
                      <div class="col-xl-2 col-lg-4  col-md-3 col-12 text-md-right text-center">
                        <label class="col-form-label signup-font-sizt-16">ยืนยันรหัสผ่าน</label>
                      </div>
                      <div class="col-xl-10 col-lg-8  col-md-9 col-12">
                          <input type="password" class="profile-form signup-from-input" name="name">
                      </div>
                    </div>

                 </form>
              </div> <!-- RIGHT --> 
              
              <div class="col-lg-6 col-12"></div>       
        </div>





        <div class="row">
          <div class="col-12 signup-mb-5">
            <div class="text-center">
              <button type="button" class="btn bnt-white signup-btn-size-300">ยกเลิก</button>
              <button type="button" class="btn bnt-purple signup-btn-size-300 signup-btn-border-none ">ยืนยันข้อมูล</button>
            </div>
          </div>

          <div class="col-12 signup-mb-3">
            <div class="text-center">
              <button type="button" class="btn signup-btn-facebook">
                <font class="signup-facebook-icon"><i class="fa fa-facebook-official" aria-hidden="true"></i></font>
                <font class="signup-facebook-text">Sign Up with Facebook</font>
              </button>
            </div>
          </div>

          <div class="col-12 signup-mb-8">
            <div class="text-center">
              <button type="button" class="btn signup-btn-gmail">
                <font class="signup-gmail-icon"><i class="fa fa-google" aria-hidden="true"></i></font>
                <font class="signup-gmail-text">Sign Up with Google</font>
              </button>
            </div>
          </div> 




        </div>

        <!-- --------------- END FROME --------------------- -->


      </div> <!-- home-size-web -->
    </div> <!-- wrapper -->

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
