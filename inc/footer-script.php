    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

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