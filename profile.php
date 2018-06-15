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
          <div class="row mt-4">
             <div class="col-xl-2"></div>
             <div class="col-xl-10 col-md-12 col-lg-12 col-12">
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
              </div>
          </div> 

          <div class="tab-content p-4" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-xl-5">
                          <div class="row mt-4">
                              <div class="col-xl-5 col-lg-3 col-md-3 col-12 mt-2">
                                 <div class="profile-font">คำนำหน้า*</div>
                              </div>
                              <div class="col-xl-7 col-lg-4 col-md-4 col-12">
                                 <select class="profile-form profile-selected " id="">
                                      <option>นาย</option>
                                      <option>นางสาว</option>
                                      <option>นาง</option>
                                 </select>         
                             </div>
                          </div>

                          <div class="row mt-4">
                            <div class="col-xl-5 col-md-3 col-lg-3 col-12 mt-2">
                                 <div class="profile-font">ชื่อ*</div>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-8 col-12 ">
                                 <input type="text" class="profile-form" id="" placeholder="มานะ">   
                             </div>
                          </div>

                           <div class="row mt-4">
                            <div class="col-xl-5 col-md-3 col-lg-3  col-12  mt-2">
                                 <div class="profile-font">นามสกุล*</div>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-8 col-12 ">
                                 <input type="text" class="profile-form" id="" placeholder="ใจดี">   
                             </div>
                          </div>

                           <div class="row mt-4">
                            <div class="col-xl-5 col-md-3 col-lg-3 col-12 mt-2">
                                 <div class="profile-font">เบอร์โทร*</div>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-8 col-12 ">
                                 <input type="text" class="profile-form" id="" placeholder="090-0000000">   
                             </div>
                          </div>

                          <div class="row mt-4">
                            <div class="col-xl-5 col-md-3 col-lg-3  col-12  mt-2">
                                 <div class="profile-font">อีเมลล์</div>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-8 col-12 ">
                                 <input type="text" class="profile-form" id="" placeholder="manajaidee@gmail.com">   
                             </div>
                          </div>

                          <div class="row mt-4">
                              <div class="col-xl-5 col-md-3 col-lg-3 col-12  mt-2">
                                 <div class="profile-font">ไลน์ ไอดี</div>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-8 col-12 ">
                                 <input type="text" class="profile-form" id="" placeholder="manajaidee1234">   
                             </div>
                          </div>
                    </div>
                    <div class="col-xl-7 mt-4">
                        <div class="row">
                              <div class="col-xl-4 col-md-3 col-lg-3  col-12">
                                 <div class="profile-font">ที่อยู่ *</div>
                              </div>
                              <div class="col-xl-5 col-12 col-lg-7 col-md-8 profile-border-bottom2 pb-3">
                                 <div class="profile-font2">
                                    5432/1 แขวง เจริญกรุง เขต เจริญกรุง <br>
                                   กรุงเทพมหานคร 10100<br>
                                   โซน A
                                 </div>
                             </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-xl-4 col-md-3 col-lg-3  col-12  mt-2">
                                 <div class="profile-font">ที่อยู่ 2*</div>
                            </div>
                            <div class="col-xl-5 col-lg-7 col-md-8 col-12 ">
                                 <input type="text" class="profile-form" id="" placeholder="1234/5 แขวง บางรัก">   
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-xl-4 col-md-3 col-lg-3  col-12 mt-2">
                                 <div class="profile-font">จังหวัด*</div>
                            </div>
                            <div class="col-xl-5 col-lg-7 col-md-8 col-12 col-9">
                                 <select class="profile-form profile-selected " id="">
                                      <option>กรุงเทพมหานคร</option>
                                      <option>นนทบุรี</option>
                                 </select>   
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-xl-4 col-md-3 col-lg-3  col-12 mt-2">
                                 <div class="profile-font">อำเภอ/เขต*</div>
                            </div>
                            <div class="col-xl-5 col-lg-7 col-md-8 col-12">
                                 <select class="profile-form profile-selected " id="">
                                      <option>บางรัก</option>
                                      <option>บางกะปิ</option>
                                 </select>   
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-xl-4 col-md-3 col-lg-3  col-12 mt-2">
                                 <div class="profile-font">รหัสไปรษณีย์*</div>
                            </div>
                            <div class="col-xl-5 col-lg-7 col-md-8 col-12">
                                 <input type="text" class="profile-form" id="" placeholder="10100">   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                  <div class="col-xl-4 col-md-4 col-lg-4"></div>
                  <div class="col-xl-4 col-md-5 col-lg-5 profile-border-bottom"></div>
                  <div class="col-xl-4 col-md-3 col-lg-3 pt-4">
                    <button type="button" class="profile-add"><i class="fa fa-plus" aria-hidden="true"></i></button>
                  </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-xl-5">
                          <div class="row">
                              <div class="col-xl-5 col-12 col-md-3 col-4 mt-2">
                                  <div class="profile-font">ชื่อผู้ใช้งาน</div>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-8 col-12">
                                  <input type="text" class="profile-form" id="" placeholder="manajaidee">     
                             </div>
                          </div>
                          <div class="row mt-4">
                              <div class="col-xl-5 col-lg-3 col-md-3 col-12 mt-2">
                                  <div class="profile-font">รหัสผ่าน</div>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-8 col-12">
                                  <input type="password" class="profile-form" id="" placeholder="....">     
                              </div>
                          </div>
                        </div>
                </div>
                <div class="row  mb-5">
                  <div class="col-xl-12  col-lg-12 text-center">
                     <button type="button" class="profile-btn1 mt-4">ยกเลิก</button>
                      <button type="button" class="profile-btn2 mt-4">ยืนยันข้อมูล</button>
                  </div>
                </div>
          </div>



          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> 
                  <div class="row">
                         <div class="col-xl-2"></div>
                         <div class="col-xl-4 col-md-6 col-lg-6">
                              <div class="col-xl-12 col-12 mt-4 text-md-left text-center">
                                   <div class="profile2-font">เลขที่ใบสั่งซื้อ : AB-101-0000</div>
                              </div>
                              <div class="col-xl-12 col-12 text-md-left text-center">
                                   <span class="profile2-font2">รายละเอียด</span>
                                   <span>
                                      <button class="profile2-dec" type="button" data-toggle="collapse" data-target=".multi-collapse1" aria-expanded="false" aria-controls="multiCollapseExample1">
                                      <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                                   </span>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-6 col-lg-6 col-12 text-md-right text-center">
                               <div class="mt-4">
                                   <span class="profile2-font4">สถานะ : </span>
                                   <span class="profile2-font3">กำลังจัดส่ง</span>
                               </div>
                               <div class="profile2-font5 mt-2">จำนวนเงิน : 1,680 บาท</div>     
                               <div class="profile2-font5 mt-2">วันที่ 20 พ.ค. 2561</div>
                          </div> 
                          <div class="col-xl-2"></div>              
                  </div>
                  <div class="row pt-3">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-6 col-md-8 col-lg-9 col-12 pb-2">
                                <div class="collapse multi-collapse1" id="multiCollapseExample1">
                                         <div class="profile2-font11">พาวเวอร์แบงค์ ชาร์จเร็ว M2 12000mAh หลากสีสัน</div>
                                         <div class="form-inline mt-2">
                                              <div class="profile2-font6">สี :</div>
                                              <div class="home-change-color mr-1 ml-2">
                                                   <a href="#" class="change-color" style="background-color: #fff;"></a>
                                              </div>
                                              <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #000;"></a>
                                              </div>
                                               <div class="home-change-color mr-1">
                                                          <a href="#" class="change-color" style="background-color: #1d5ed4;"></a>
                                              </div>
                                         </div>      
                                 </div>
                          </div>
                          <div class="col-xl-2 col-md-4 col-lg-3 col-12 text-md-right text-center">       
                                   <div class="collapse multi-collapse1" id="multiCollapseExample1">           
                                        <div class="profile2-font10">810 บาท</div>
                                        <div class="profile2-font9 mt-2">จำนวน : 1 ชิ้น</div>                    
                                   </div>        
                          </div>  
                          <div class="col-xl-2"></div> 
                  </div>
                  <div class="row pt-2 pb-3">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-6 col-md-8 col-12 col-lg-9 pb-2">
                                <div class="collapse multi-collapse1" id="multiCollapseExample1">          
                                         <div class="profile2-font11">พาวเวอร์แบงค์ ชาร์จเร็ว M2 12000mAh หลากสีสัน</div>
                                         <div class="form-inline mt-2">
                                              <div class="profile2-font6">สี :</div>
                                              <div class="home-change-color mr-1 ml-2">
                                                   <a href="#" class="change-color" style="background-color: #fff;"></a>
                                              </div>
                                              <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #000;"></a>
                                              </div>
                                               <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #1d5ed4;"></a>
                                              </div>
                                         </div>        
                                 </div>
                          </div>
                          <div class="col-xl-2 col-md-4 col-lg-3 col-12 text-md-right text-center">       
                                   <div class="collapse multi-collapse1" id="multiCollapseExample1">           
                                        <div class="profile2-font10">810 บาท</div>
                                        <div class="profile2-font9 mt-2">จำนวน : 1 ชิ้น</div>                    
                                   </div>        
                          </div>  
                          <div class="col-xl-2"></div>   
                  </div>


        <div class="row profile2-border-bottom"></div>


                  <div class="row">
                         <div class="col-xl-2"></div>
                         <div class="col-xl-4 col-md-6 col-lg-6">
                              <div class="col-xl-12 col-12 mt-4 text-md-left text-center">
                                   <div class="profile2-font">เลขที่ใบสั่งซื้อ : AB-124-0001</div>
                              </div>
                              <div class="col-xl-12 col-12 text-md-left text-center">
                                   <span class="profile2-font2 mt-4">รายละเอียด</span>
                                   <span>
                                      <button class="profile2-dec" type="button" data-toggle="collapse" data-target=".multi-collapse2" aria-expanded="false" aria-controls="multiCollapseExample2">
                                      <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                                   </span>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-6 col-lg-6 col-12 text-md-right text-center">
                               <div class="mt-4">
                                   <span class="profile2-font4">สถานะ : </span>
                                   <span class="profile2-font7">ยกเลิก</span>
                               </div>
                               <div class="profile2-font5 mt-2">จำนวนเงิน : 890 บาท</div>     
                               <div class="profile2-font5 mt-2">วันที่ 18 พ.ค. 2561</div>
                          </div> 
                          <div class="col-xl-2"></div>               
                  </div>
                  <div class="row pt-3 pb-3">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-6 col-md-8 col-lg-9 col-12 pb-2">
                                <div class="collapse multi-collapse2" id="multiCollapseExample2">
                                         <div class="profile2-font11">พาวเวอร์แบงค์ ชาร์จเร็ว M2 12000mAh หลากสีสัน</div>
                                         <div class="form-inline mt-2">
                                              <div class="profile2-font6">สี :</div>
                                              <div class="home-change-color mr-1 ml-2">
                                                   <a href="#" class="change-color" style="background-color: #fff;"></a>
                                              </div>
                                              <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #000;"></a>
                                              </div>
                                               <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #1d5ed4;"></a>
                                              </div>
                                         </div>      
                                 </div>
                          </div>
                           <div class="col-xl-2 col-md-4 col-lg-3 col-12 text-md-right text-center">       
                                   <div class="collapse multi-collapse2" id="multiCollapseExample2">           
                                        <div class="profile2-font10 mt-2">810 บาท</div>
                                        <div class="profile2-font9">จำนวน : 1 ชิ้น</div>                    
                                   </div>        
                          </div>  
                          <div class="col-xl-2"></div>   
                  </div>


        <div class="row profile2-border-bottom"></div>


                  <div class="row">
                         <div class="col-xl-2"></div>
                         <div class="col-xl-4 col-md-6 col-lg-6">
                               <div class="col-xl-12 col-12 mt-4 text-md-left text-center">
                                   <div class="profile2-font">เลขที่ใบสั่งซื้อ : AB-002-0002</div>
                              </div>
                              <div class="col-xl-12 col-12 text-md-left text-center">
                                   <span class="profile2-font2">รายละเอียด</span>
                                   <span>
                                      <button class="profile2-dec" type="button" data-toggle="collapse" data-target=".multi-collapse3" aria-expanded="false" aria-controls="multiCollapseExample3">
                                      <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                                   </span>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-6 col-lg-6 col-12 text-md-right text-center">
                               <div class="mt-4">
                                   <span class="profile2-font4">สถานะ : </span>
                                   <span class="profile2-font8">รอการชำระเงิน</span>
                               </div>
                               <div class="profile2-font5 mt-2">จำนวนเงิน : 900 บาท</div>     
                               <div class="profile2-font5 mt-2">วันที่ 05 พ.ค. 2561</div>
                          </div> 
                          <div class="col-xl-2"></div>                
                  </div>
                  <div class="row pt-3">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-6 col-md-8 col-lg-9 col-12 pb-2">
                                <div class="collapse multi-collapse3" id="multiCollapseExample3">
                                         <div class="profile2-font11">พาวเวอร์แบงค์ ชาร์จเร็ว M2 12000mAh หลากสีสัน</div>
                                         <div class="form-inline mt-2">
                                              <div class="profile2-font6">สี :</div>
                                              <div class="home-change-color mr-1 ml-2">
                                                   <a href="#" class="change-color" style="background-color: #fff;"></a>
                                              </div>
                                              <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #000;"></a>
                                              </div>
                                               <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #1d5ed4;"></a>
                                              </div>
                                         </div>      
                                 </div>
                          </div>
                           <div class="col-xl-2 col-md-4 col-lg-3 col-12 text-md-right text-center">       
                                   <div class="collapse multi-collapse3" id="multiCollapseExample3">           
                                        <div class="profile2-font10">810 บาท</div>
                                        <div class="profile2-font9 mt-2">จำนวน : 1 ชิ้น</div>                    
                                   </div>        
                          </div>  
                          <div class="col-xl-2"></div>   
                  </div>   
            </div>



            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                         <div class="row justify-content-center">
                              <div class="profile3-h">รหัสของฉัน : </div>
                              <div class="profile3-font2 ml-2">0000000</div>
                         </div>
                         <div class="row mt-5">
                             <div class="col-xl-2"></div>
                             <div class="col-xl-7 col-12">
                                 <div class="row justify-content-center">
                                      <div class="col-xl-1"></div>
                                      <div class="col-xl-4 col-md-7 col-12">
                                         <div class="profile3-font3">คอมมิชชันที่ชำระแล้ว</div>
                                      </div>             
                                      <div class="col-xl-2 col-md-5 col-12">
                                         <div class="profile3-font4">200 บาท</div>
                                      </div>
                                  </div>
                             </div>
                             <div class="col-xl-2"></div>
                        </div>
                        <div class="row mt-3">
                             <div class="col-xl-2"></div>
                             <div class="col-xl-7 pb-5">
                                 <div class="row justify-content-center">
                                      <div class="col-xl-1"></div>
                                      <div class="col-xl-4 col-md-7 col-12">
                                         <div class="profile3-font3">คอมมิชชันที่ชำระแล้ว</div>
                                      </div>            
                                      <div class="col-xl-2 col-md-5 col-12">
                                         <div class="profile3-font4">200 บาท</div>
                                      </div>
                                  </div>
                             </div>
                             <div class="col-xl-2"></div>
                        </div>
                        <div class="row justify-content-center">
                          <div class="col-xl-4"></div>
                          <div class="col-xl-3 profile3-border-bottom"></div>
                          <div class="col-xl-4"></div>
                        </div>
                        <div class="row mt-3">
                             <div class="col-xl-2"></div>
                             <div class="col-xl-7 col-12">
                                 <div class="row justify-content-center">
                                      <div class="col-xl-5 col-md-7 col-12">
                                         <div class="profile3-font1">คอมมิชชันทั้งหมด</div>
                                      </div>       
                                      <div class="col-xl-2 col-md-5 col-12">
                                         <div class="profile3-font5">400 บาท</div>
                                      </div>
                                  </div>
                             </div>
                             <div class="col-xl-2"></div>
                        </div>


                  <div class="row mt-5">
                         <div class="col-xl-2"></div>
                         <div class="col-xl-4 col-md-6 col-lg-6">
                              <div class="col-xl-12 mt-4 text-md-left text-center">
                                   <div class="profile2-font">เลขที่ใบสั่งซื้อ : AB-101-0000</div>
                              </div>
                              <div class="col-xl-12 text-md-left text-center">
                                   <span class="profile2-font2 mar-t">รายละเอียด</span>
                                   <span>
                                      <button class="profile3-dec ml-2" type="button" data-toggle="collapse" data-target=".multi-collapse4" aria-expanded="false" aria-controls="multiCollapseExample4">
                                      <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                                   </span>
                               </div>
                          </div>
                          <div class="col-xl-4 col-md-6 col-lg-6 col-12 text-md-right text-center">
                               <div class="mt-4">
                                   <span class="profile2-font4">สถานะการจ่าย :</span>
                                   <span class="profile2-font3">จ่ายแล้ว</span>
                               </div>
                               <div class="profile3-font6 mt-2">จำนวนเงินรวมค่าคอมมิชชัน : 100 บาท</div>
                               <div class="profile3-font6 mt-2">วันที่ 20 พ.ค. 2561</div>
                               <div class="profile3-font6 mt-2">บัญชีที่ได้รับ : ธ.กรุงเทพ สาขา เจริญกรุง เลขที่ 01-2365-1542</div>
                          </div> 
                          <div class="col-xl-2"></div>           
                  </div>
                  <div class="row pt-4 pb-4">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-6 col-md-8 col-lg-9 col-12 pb-2">
                                <div class="collapse multi-collapse4" id="multiCollapseExample4">
                                         <div class="profile2-font11">พาวเวอร์แบงค์ ชาร์จเร็ว M2 12000mAh หลากสีสัน</div>
                                         <div class="form-inline mt-2">
                                              <div class="profile3-font7">สี :</div>
                                              <div class="home-change-color mr-1 ml-2">
                                                   <a href="#" class="change-color" style="background-color: #fff;"></a>
                                              </div>
                                              <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #000;"></a>
                                              </div>
                                               <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #1d5ed4;"></a>
                                              </div>
                                         </div>      
                                 </div>
                          </div>
                          <div class="col-xl-2 col-md-4 col-lg-3 col-12 text-md-right text-center">       
                                   <div class="collapse multi-collapse4" id="multiCollapseExample4">           
                                        <div class="profile2-font10">ค่าคอมมิชชัน 100 บาท</div>                 
                                   </div>        
                          </div>  
                          <div class="col-xl-2"></div>       
                  </div>
                  

          <div class="row profile2-border-bottom"></div>


                  <div class="row">
                         <div class="col-xl-2"></div>
                         <div class="col-xl-4 col-md-6 col-lg-6">
                              <div class="col-xl-12 mt-4 text-md-left text-center">
                                   <div class="profile2-font">เลขที่ใบสั่งซื้อ : AB-124-0001</div>
                              </div>
                              <div class="col-xl-12 text-md-left text-center">
                                   <span class="profile2-font2 mar-t">รายละเอียด</span>
                                   <span>
                                      <button class="profile3-dec ml-2" type="button" data-toggle="collapse" data-target=".multi-collapse5" aria-expanded="false" aria-controls="multiCollapseExample5">
                                      <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                                   </span>
                               </div>
                          </div>
                          <div class="col-xl-4 col-md-6 col-lg-6 col-12 text-md-right text-center">
                               <div class="mt-4">
                                   <span class="profile2-font4">สถานะการจ่าย :</span>
                                   <span class="profile2-font3">จ่ายแล้ว</span>
                               </div>
                               <div class="profile3-font6 mt-2">จำนวนเงินรวมค่าคอมมิชชัน : 100 บาท</div>
                               <div class="profile3-font6 mt-2">วันที่ 18 พ.ค. 2561</div>
                               <div class="profile3-font6 mt-2">บัญชีที่ได้รับ : ธ.กรุงเทพ สาขา เจริญกรุง เลขที่ 01-2365-1542</div>
                          </div> 
                          <div class="col-xl-2"></div>              
                  </div>
                  <div class="row pt-4 pb-3">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-6 col-md-8 col-lg-9 col-12 pb-2">
                                <div class="collapse multi-collapse5" id="multiCollapseExample5">
                                         <div class="profile2-font11">พาวเวอร์แบงค์ ชาร์จเร็ว M2 12000mAh หลากสีสัน</div>
                                         <div class="form-inline mt-2">
                                              <div class="profile3-font7">สี :</div>
                                              <div class="home-change-color mr-1 ml-2">
                                                   <a href="#" class="change-color" style="background-color: #fff;"></a>
                                              </div>
                                              <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #000;"></a>
                                              </div>
                                               <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #1d5ed4;"></a>
                                              </div>
                                         </div>             
                                 </div>
                          </div>
                          <div class="col-xl-2 col-md-4 col-lg-3 col-12 text-md-right text-center">       
                                   <div class="collapse multi-collapse5" id="multiCollapseExample5">           
                                        <div class="profile2-font10">ค่าคอมมิชชัน 100 บาท</div>                 
                                   </div>        
                          </div>  
                          <div class="col-xl-2"></div>   
                  </div>


        <div class="row profile2-border-bottom"></div>


                  <div class="row">
                         <div class="col-xl-2"></div>
                         <div class="col-xl-4 col-md-6 col-lg-6">
                               <div class="col-xl-12 mt-4 text-md-left text-center">
                                   <div class="profile2-font">เลขที่ใบสั่งซื้อ : AB-002-0002</div>
                              </div>
                              <div class="col-xl-12 text-md-left text-center">
                                   <span class="profile2-font2 mar-t">รายละเอียด</span>
                                   <span>
                                      <button class="profile3-dec ml-2" type="button" data-toggle="collapse" data-target=".multi-collapse6" aria-expanded="false" aria-controls="multiCollapseExample6">
                                      <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                                   </span>
                               </div>
                          </div>
                          <div class="col-xl-4 col-md-6 col-lg-6 col-12 text-md-right text-center">
                               <div class="mt-4">
                                   <span class="profile2-font4">สถานะการจ่าย :</span>
                                   <span class="profile2-font7">ยังไม่ได้จ่าย</span>
                               </div>
                               <div class="profile3-font6 mt-2">จำนวนเงินรวมค่าคอมมิชชัน : 100 บาท</div>
                               <div class="profile3-font6 mt-2">วันที่ 05 พ.ค. 2561</div>
                               <div class="profile3-font6 mt-2">บัญชีที่ได้รับ : ธ.กรุงเทพ สาขา เจริญกรุง เลขที่ 01-2365-1542</div>
                          </div> 
                          <div class="col-xl-2"></div>              
                  </div>
                  <div class="row pt-4">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-6 col-md-8 col-lg-9 col-12 pb-2">
                                <div class="collapse multi-collapse6" id="multiCollapseExample6">                                
                                         <div class="profile2-font11">พาวเวอร์แบงค์ ชาร์จเร็ว M2 12000mAh หลากสีสัน</div>
                                         <div class="form-inline mt-2">
                                              <div class="profile3-font7">สี :</div>
                                              <div class="home-change-color mr-1 ml-2">
                                                   <a href="#" class="change-color" style="background-color: #fff;"></a>
                                              </div>
                                              <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #000;"></a>
                                              </div>
                                               <div class="home-change-color mr-1">
                                                   <a href="#" class="change-color" style="background-color: #1d5ed4;"></a>
                                              </div>
                                         </div>      
                                 </div>
                          </div>
                           <div class="col-xl-2 col-md-4 col-lg-3 col-12 text-md-right text-center">       
                                   <div class="collapse multi-collapse6" id="multiCollapseExample6">           
                                        <div class="profile2-font10">ค่าคอมมิชชัน 100 บาท</div>                 
                                   </div>        
                          </div>  
                          <div class="col-xl-2"></div>   
                  </div> 


         </div>
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