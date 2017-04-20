<?php
    include "head.php";
    include "nav.php";
?>

<section id="booking-page">

	<div class="booking-loading no-display-800">

		<i class="fa fa-circle-o-notch fa-spin"></i><br />

		Loading Bethany Reservation Suite...<br />
		<span>powered by ridebits.com</span>

	</div><!-- booking loading -->

	<div class="margins-90">

		<script type="text/javascript" src="https://bethanytransportation.ridebitsapp.com/widgets/widget_loader.js"></script>


		<iframe src="https://bethanytransportation.ridebitsapp.com/central/new_reservation" width=100% style="height: 700px" frameborder="0" style="z-index: 8888;"></iframe></p>
		<div class="clear cleared"></div>
		</div>
		<div class="myridebits">

		<script type="text/javascript" src="https://bluenilelivery.ridebitsapp.com/widgets/widget_loader.js"></script>

		<div class="clearboth"></div>

	</div><!-- margins: booking page -->

</section><!-- booking page section -->

<?php 

    include "footer.php";

?>
