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
            
              
              <div class="col-md col-12">
                <div class="form-group row">
                  <div class="col-12 text-lg-left text-center">
                    <label class="col-form-label">หมวดหลักสินค้า</label>
                  </div>
                  <div class="col-12">
                    <select class="profile-form signup-select">
                    <option></option>
                    <option>หูฟัง</option>
                    <option>ลำโพง</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md col-12">
                <div class="form-group row">
                  <div class="col-12 text-lg-left text-center">
                    <label class="col-form-label">หมวดย่อยสินค้า</label>
                  </div>
                  <div class="col-12">
                    <select class="profile-form signup-select">
                    <option></option>
                    <option>หูฟัง</option>
                    <option>ลำโพง</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md col-12">
                <div class="form-group row">
                  <div class="col-12 text-lg-left text-center">
                    <label class="col-form-label">แบรนด์</label>
                  </div>
                  <div class="col-12">
                    <select class="profile-form signup-select">
                    <option></option>
                    <option>หูฟัง</option>
                    <option>ลำโพง</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-1 col-12 px-0">
                <div class="form-group row">
                  <div class="col-12 text-lg-left text-center">
                    <label class="col-form-label"></label>
                  </div>
                  <div class="col-12">
                    <div class="text-md-right text-center px-3">
                      <button type="button" class="btn productlist-search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                </div>

              </div>
          </div>


          <div class="row">
            <div class="col-12">
              <div class="text-purple text-md-left text-center">
                <h1>สินค้าทั้งหมด</h1>
              </div>
              <div><hr style="border: 2px solid #d6d6d6;"></div>
            </div>
          </div>



          <!-- PRODUCT LIST -->
            <div class="row productlist-my-5 ">
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/1.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/2.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/3.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/4.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/5.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/1.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/2.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/3.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/4.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/5.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/1.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/2.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/3.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/4.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
              <div class="col-2-half product-collum">
                <div class="card home-product-card" style="width: 100%">
                  <div class="mb-3 overlay-img">
                    <img class="card-img-top image-full" src="assets/images/product/5.jpg" alt="Card image cap">
                    <div class="overlay">
                      <a href="product-detail.php" class="text-overlay">
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
                    <div class="text-center home-content-product productlist-px-15">
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
            </div> 

            <div class="row">
              <div class="col-12">
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="productlist-page-link" href="#" tabindex="-1">
                        <i class="fa fa-caret-left" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="page-item"><a class="productlist-page-link" href="#">1</a></li>
                    <li class="page-item"><a class="productlist-page-link" href="#">2</a></li>
                    <li class="page-item"><a class="productlist-page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="productlist-page-link" href="#">
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </nav>                
              </div>
            </div>




            <div class="row productlist-my-5 ">
              <div class="col-md-6 col-12 mb-3">
                <div class="productlist-img-bands">
                  <img src="assets/images/product/HTB1.jpg" class="home-img-bands">
                </div>
              </div>
              <div class="col-md-6 col-12 mb-3">
                <div class="productlist-img-bands">
                  <img src="assets/images/product/HTB1.jpg" class="home-img-bands">
                </div>
              </div>
            </div>



        </div>


        <div class="productlist-img-footer">
          <img src="assets/images/slide/Slider-02.png" class="home-img-bands">
        </div>

          <!-- END PRODUCT LIST -->


        
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
