    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


    <script type="text/javascript">
	    function zoom(e) {
	        var zoomer = e.currentTarget;
	        e.offsetX ? (offsetX = e.offsetX) : (offsetX = e.touches[0].pageX);
	        e.offsetY ? (offsetY = e.offsetY) : (offsetX = e.touches[0].pageX);
	        x = offsetX / zoomer.offsetWidth * 100;
	        y = offsetY / zoomer.offsetHeight * 100;
	        zoomer.style.backgroundPosition = x + "% " + y + "%";
	    }

		    $('.input-daterange').datepicker({
				    format: 'dd.mm.yyyy',
				    language: 'ru',
				    autoclose: true,
				    startDate: new Date(),
				    setDate: new Date(),
				    todayHighlight: true,
				    orientation: "bottom auto"
				});
    </script>

