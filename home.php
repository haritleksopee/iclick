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

        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item"><img src="assets/images/2100X1184/2100X1184.jpg" alt="The Last of us"></div>
            <div class="item"><img src="assets/images/2100X1184/2100X1184.jpg" alt="GTA V"></div>
            <div class="item"><img src="assets/images/2100X1184/2100X1184.jpg" alt="Mirror Edge"></div>
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

    <script type="text/javascript">
      $(document).ready(function() {
 
        $("#owl-demo").owlCarousel({
       
            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true
       
            "singleItem:true" is a shortcut for:
            items : 1, 
            itemsDesktop : false,
            itemsDesktopSmall : false,
            itemsTablet: false,
            itemsMobile : false
       
        });
       
      });
    </script>
