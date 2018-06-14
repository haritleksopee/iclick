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

        <!-- HEAD -->
        <div class="col-12">
          <div class="text-purple text-md-left text-center px-3">
            <h1>ยืนยันคำสั่งซื้อ</h1>
          </div>
          <div class="px-3"><hr style="border: 2px solid #d6d6d6;"></div>
        </div>
        <!-- END HEAD -->




        <!-- CONTENT -->
          <div class="row">
            <div class="col-xl-8 col-lg-10 col-12 px-5">
              <div class="order-text-set-h text-md-left text-center">
                <label class="text-dark-purple">เลขที่ใบสั้งซื้อ : </label>
                <label class="text-dark-purple">AB-101-0000</label>
              </div>
            </div>
            <div class="col-xl-4 col-lg-2 col-12">
              <div class="prodetail-inline-text pull-right">
                <div>
                  <button type="button" class="btn prodetail-btn-size"><i class="fa fa-print" aria-hidden="true"></i></button>
                </div>
                <div>
                  <button type="button" class="btn prodetail-btn-size"><i class="fa fa-clone" aria-hidden="true"></i></button>
                </div>
                <div>
                  <button type="button" class="btn prodetail-btn-size"><i class="fa fa-share-alt" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div> 
       
          <div class="row">
            <div class="col-12 px-5">
              <div class="order-text-set-h text-md-left text-center orderconfirm-font-weight500">
                <label class="text-secondary">ชื่อผู้รับ : </label>
                <label class="text-secondary">นาย มานะ ใจดี</label>
              </div>
            </div>
            <div class="col-12 px-5">
              <div class="order-text-set-h text-md-left text-center orderconfirm-font-weight500">
                <label class="text-secondary">ที่อยู่จัดส่ง : </label>
                <label class="text-secondary">5432/1 แขวง เจริญกรุง เขต เจริญกรุง กรุงเทพมหานคร 10100</label>
                <label class="text-dark-purple" style="margin-left: 15px;">โซน A</label>
              </div>
            </div>
            <div class="col-12 px-5">
              <div class="order-text-set-h text-md-left text-center orderconfirm-font-weight500">
                <label class="text-secondary">เบอร์โทรศัพท์ : </label>
                <label class="text-secondary">090-0000000</label>
              </div>
            </div>
            <div class="col-12 px-5">
              <div class="order-text-set-b text-md-left text-center orderconfirm-font-weight500">
                  <button type="button" class="btn orderconfirm-edit">แก้ไข</button>
                  <!-- <input type="radio" class="form-check-input" name="optradio">Option 1 -->
              </div>
            </div>
            <hr class="signup-hr mt-5">
            <div class="col-12">
              <div class="text-secondary text-center">
                  <h3>สินค้าที่เลือก</h3>
              </div>
            </div>
          </div> 

        <!-- END CONTENT -->




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
