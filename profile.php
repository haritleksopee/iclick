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
          <div class="p-4">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="profile-nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ข้อมูลผู้ใช้</a>
                  </li>
                  <li class="nav-item">
                    <a class="profile-nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">ประวัติการสั่งซื้อ</a>
                  </li>
                  <li class="nav-item">
                    <a class="profile-nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">ค่าคอมมิชชั่น</a>
                  </li>
              </ul>
          </div>     
          <div class="tab-content p-4" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row mt-4">
                  <div class="col-xl-2"></div>
                    <div class="col-xl-5">
                          <div class="row">
                              <div class="col-xl-2 col-4 mt-2">
                                 <div class="profile-font">คำนำหน้า*</div>
                              </div>
                              <div class="col-xl-3 col-8">
                                 <select class="profile-form" id="">
                                      <option>นาย</option>
                                      <option>นางสาว</option>
                                 </select>         
                             </div>
                          </div>

                          <div class="row mt-5">
                            <div class="col-xl-2 col-3 mt-2">
                                 <div class="profile-font">ชื่อ*</div>
                              </div>
                              <div class="col-xl-6 col-9">
                                 <input type="text" class="profile-form" id="" placeholder="มานะ">   
                             </div>
                          </div>

                           <div class="row mt-5">
                            <div class="col-xl-2 col-3 mt-2">
                                 <div class="profile-font">นามสกุล*</div>
                              </div>
                              <div class="col-xl-6 col-9">
                                 <input type="text" class="profile-form" id="" placeholder="ใจดี">   
                             </div>
                          </div>

                           <div class="row mt-5">
                            <div class="col-xl-2 col-3 mt-2">
                                 <div class="profile-font">เบอร์โทร*</div>
                              </div>
                              <div class="col-xl-6 col-9">
                                 <input type="text" class="profile-form" id="" placeholder="090-0000000">   
                             </div>
                          </div>

                          <div class="row mt-5">
                            <div class="col-xl-2 col-3 mt-2">
                                 <div class="profile-font">อีเมลล์</div>
                              </div>
                              <div class="col-xl-6 col-9">
                                 <input type="text" class="profile-form" id="" placeholder="manajaidee@gmail.com">   
                             </div>
                          </div>

                          <div class="row mt-5">
                              <div class="col-xl-2 col-3 mt-2">
                                 <div class="profile-font">ไลน์ ไอดี</div>
                              </div>
                              <div class="col-xl-6 col-9">
                                 <input type="text" class="profile-form" id="" placeholder="manajaidee1234">   
                             </div>
                          </div>
                    </div>

                    <div class="col-xl-5">
                        <div class="row">
                              <div class="col-xl-2 col-3">
                                 <div class="profile-font">ที่อยู่ *</div>
                              </div>
                              <div class="col-xl-6 col-9 profile-border-bottom2 pb-3">
                                 <div class="profile-font2">
                                    5432/1 แขวง เจริญกรุง เขต เจริญกรุง <br>
                                   กรุงเทพมหานคร 10100<br>
                                   โซน A
                                 </div>
                             </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-xl-2 col-3 mt-2">
                                 <div class="profile-font">ที่อยู่ 2*</div>
                            </div>
                            <div class="col-xl-6 col-9">
                                 <input type="text" class="profile-form" id="" placeholder="1234/5 แขวง บางรัก">   
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-xl-2 col-3 mt-2">
                                 <div class="profile-font">จังหวัด*</div>
                            </div>
                            <div class="col-xl-6 col-9">
                                 <select class="profile-form" id="">
                                      <option>กรุงเทพมหานคร</option>
                                      <option>นนทบุรี</option>
                                 </select>   
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-xl-2 col-3 mt-2">
                                 <div class="profile-font">อำเภอ/เขต*</div>
                            </div>
                            <div class="col-xl-6 col-9">
                                 <select class="profile-form" id="">
                                      <option>บางรัก</option>
                                      <option>บางกะปิ</option>
                                 </select>   
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-xl-2 col-3 mt-2">
                                 <div class="profile-font">รหัสไปราณีย์*</div>
                            </div>
                            <div class="col-xl-6 col-9">
                                 <input type="text" class="profile-form" id="" placeholder="10100">   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                  <div class="col-xl-5"></div>
                  <div class="col-xl-2 profile-border-bottom"></div>
                  <div class="col-xl-5"></div>
                </div>

               <div class="row mb-5">
                   <div class="col-xl-2"></div>
                       <div class="col-xl-10">
                          <div class="row mt-5">
                                <div class="col-xl-1 col-3 mt-2">
                                   <div class="profile-font">ชื่อผู้ใช้งาน</div>
                                </div>
                                <div class="col-xl-3 col-9">
                                   <input type="text" class="profile-form" id="" placeholder="manajaidee">   
                               </div>
                          </div>
                            <div class="row mt-5">
                                <div class="col-xl-1 col-3 mt-2">
                                   <div class="profile-font">รหัสผ่าน</div>
                                </div>
                                <div class="col-xl-3 col-9">
                                   <input type="password" class="profile-form" id="" placeholder="....">   
                               </div>
                          </div>
                      </div>
                </div>

                </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">.eaberbearb</div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">4546757</div>
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