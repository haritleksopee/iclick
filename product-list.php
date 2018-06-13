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
     <!-- CONTENT  -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ri de="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="flex-carousel-img">
                <img class="d-block img-carousel-auto" src="assets/images/slide/shanghai.jpg" alt="First slide">
              </div> 
            </div>
            <div class="carousel-item">
              <div class="flex-carousel-img">
                <img class="d-block img-carousel-auto" src="assets/images/slide/company-slider-01.jpg" alt="First slide">
              </div> 
            </div>
            <div class="carousel-item">
              <div class="flex-carousel-img">
                <img class="d-block img-carousel-auto" src="assets/images/slide/tumblr_n9hyqfJavs1st5lhmo1_1280-900x502.jpg" alt="First slide">
              </div> 
            </div>
          </div>
        </div> 


        <!-- PRODUCT -->

        <div class="home-size-web">
          <div class="row mb-5">
            
              
              <div class="col-md-5">
                <div class="row">
                  <div class="col-4">
                    <div class="card product-list-circle">
                      <div class="card-body">
                        <img src="assets/images/slide/lace.png" class="product-list-img-circle">
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card product-list-circle">
                      <div class="card-body">
                        <img src="assets/images/slide/crown.png" class="product-list-img-circle">
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card product-list-circle">
                      <div class="card-body">
                        <img src="assets/images/slide/photos-naja.png" class="product-list-img-circle">
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-md-7">
                <div class="row">
                  <div class="col-4">
                    <div class="form-group productlist-mt-auto">
                      <label class="col-form-label">หมวดหลักสินค้า</label>
                      <select class="profile-form signup-from-select signup-select productlist-w-90">
                          <option></option>
                          <option>หูฟัง</option>
                          <option>ลำโพง</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group productlist-mt-auto">
                      <label class="col-form-label">หมวดย่อยสินค้า</label>
                      <select class="profile-form signup-from-select signup-select productlist-w-90">
                          <option></option>
                          <option>หูฟัง</option>
                          <option>ลำโพง</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group productlist-mt-auto">
                      <label class="col-form-label">แบรนด์</label>
                      <select class="profile-form signup-from-select signup-select productlist-w-90">
                          <option></option>
                          <option>หูฟัง</option>
                          <option>ลำโพง</option>
                      </select>

                      <a href="#" class="productlist-search" style="color: #b307ea;"><i class="fa fa-search" aria-hidden="true"></i></a>

                    </div>
                  </div>
<!--                   <div class="col-3">
                    <div class="form-group productlist-mt-auto">
                      <div class="productlist-search">
                        <a href="#" style="color: #b307ea;"><i class="fa fa-search" aria-hidden="true"></i></a>
                      </div>
                    </div> 
                  </div> -->

                </div>
              </div>
          </div>


          <div class="row">
            <div class="col-12">
              <div class="text-purple">
                <h1>สินค้าทั้งหมด</h1>
              </div>
              <div><hr style="border: 3px solid #d6d6d6;"></div>
            </div>
          </div>



          <!-- PRODUCT LIST -->
            <div class="row productlist-my-5 ">
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/1.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">พาวเวอร์แบงค์ ชาร์จเร็ว M2 12000mAh หลากสีสัน</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>810 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">
                      <div class="home-change-color mr-1">
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
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/2.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">ฟิล์มกระจกกันรอย 2.5D ไอโฟน X สีดำ</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>390 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/3.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">ฟิล์มกระจกกันรอย 2.5D ไอโฟน 7 สีขาวและสีดำ</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>350 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/4.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">พาวเวอร์แบงค์ ชาร์จเร็จ K1 12000mAh หลากสีสัน</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>890 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #fff;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #bb3e3e;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #000;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #bf9e27;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #1d5ed4;"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/5.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">ฟิล์มกระจกกันรอย สำหรับไอโฟน X สีดำ</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>580 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/1.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">พาวเวอร์แบงค์ ชาร์จเร็ว M2 12000mAh หลากสีสัน</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>810 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">
                      <div class="home-change-color mr-1">
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
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/2.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">ฟิล์มกระจกกันรอย 2.5D ไอโฟน X สีดำ</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>390 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/3.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">ฟิล์มกระจกกันรอย 2.5D ไอโฟน 7 สีขาวและสีดำ</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>350 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #fff;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #bb3e3e;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #000;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #bf9e27;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #1d5ed4;"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/4.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">พาวเวอร์แบงค์ ชาร์จเร็จ K1 12000mAh หลากสีสัน</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>890 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #fff;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #bb3e3e;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #000;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #bf9e27;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #1d5ed4;"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/5.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">ฟิล์มกระจกกันรอย สำหรับไอโฟน X สีดำ</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>580 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">
                      <div class="home-change-color mr-1">
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
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/1.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">พาวเวอร์แบงค์ ชาร์จเร็ว M2 12000mAh หลากสีสัน</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>810 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">
                      <div class="home-change-color mr-1">
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
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/2.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">ฟิล์มกระจกกันรอย 2.5D ไอโฟน X สีดำ</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>390 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/3.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">ฟิล์มกระจกกันรอย 2.5D ไอโฟน 7 สีขาวและสีดำ</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>350 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/4.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">พาวเวอร์แบงค์ ชาร์จเร็จ K1 12000mAh หลากสีสัน</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>890 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #fff;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #bb3e3e;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #000;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #bf9e27;"></a>
                      </div>
                      <div class="home-change-color mr-1">
                        <a href="#" class="change-color" style="background-color: #1d5ed4;"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2-half">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/5.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="#" class="text-overlay">
                          <i class="fa fa-plus overlay-icon-size" aria-hidden="true"></i>
                          <p>ใส่ตะกร้า</p>
                      </a>
                    </div>
                  </div>
                  <div class="card-body card-body-respon" style="border: 3px solid #695ff4;">
                    <div class="text-center home-star">
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                      <a href="#" class="text-star"><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center home-content-product">
                      <p class="card-text">ฟิล์มกระจกกันรอย สำหรับไอโฟน X สีดำ</p>
                    </div>
                    <div class="text-center text-dark-purple mt-3">
                      <h3>580 B</h3>
                    </div>
                  </div>
                  <div class="card-footer home-card-footer">
                    <div class="form-inline">

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                  <div class="text-center mt-3">
                    <button type="button" class="btn bnt-purple bnt-adjunct">แสดงเพิ่มเติม</button>
                  </div>
              </div>
            </div> 


            <div class="row productlist-my-5 ">
              <div class="col-6">
                <div class="productlist-img-bands">
                  <img src="assets/images/product/HTB1.jpg" class="home-img-bands">
                </div>
              </div>
              <div class="col-6">
                <div class="productlist-img-bands">
                  <img src="assets/images/product/HTB1.jpg" class="home-img-bands">
                </div>
              </div>
            </div>
          </div>


          <div>
            <img src="assets/images/slide/Slider.02.png">
          </div>

          <!-- END PRODUCT LIST -->


        </div>
        <!-- END PRODUCT -->





     <!-- END CONTENT  -->
    </div> <!-- wrapper -->

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
