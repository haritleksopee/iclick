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
      <div class="container-fluid">
        <h2 class="pay_ma_h2_top ">แจ้งชำระเงิน</h2>
        <hr class="pay_hr_width"> 
      </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-12 pay_l">
               <div class="form-group row pt-5">
                  <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center">
                     <label class="pay-form-label ">เลขที่คำสั่งซื้อ</label>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 ">
                    <input type="text"  class=" pay-from">
                  </div>
               </div> 
               <div class="form-group row ">
                  <div class="col-lg-4 col-md-3 col-12 text-md-right text-sm-center text-center">
                     <label class="pay-form-label ">เบอร์โทรศัพท์</label>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 ">
                    <input type="text"  class=" pay-from">
                  </div>
               </div> 
               <div class="form-group row ">
                  <div class="col-lg-4 col-md-3 col-2 text-md-right text-sm-center text-center">
                     <label class="pay-form-label "></label>
                  </div>
                  <div class="col-lg-4 col-md-6 col-8 ">
                     <div class="form-group">
                        <input type="file" name="file" id="file" class="pay_input-file">
                        <label for="file" class="btn pay_btn-tertiary pay_con_mar">
                          <span >แนบไฟล์</span>
                        </label>
                      </div>                  
                  </div>
                  <div class="col-lg-4 col-md-3 col-2"> </div>
                  
               </div>

            </div>
   

            <div class="col-lg-6 col-md-6 col-6 pay_top_but">
              <div class="text-right ">
                <button type="button" class="btn btn-blue pay_bb_2">ยกเลิก</button>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6 pay_top_but">
              <div class="text-left">
                <button type="button" class="btn btn-blue pay_bb_3">ส่งข้อมูล</button>
              </div>
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


