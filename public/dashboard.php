<?php
require_once("../includes/initialize.php");

$session = new Session();
if (!$session->has('isLoggedIn') || $session->get('isLoggedIn') !== 'true')
{
	redirect_to('registration.php');
}
?>
<?php createHeader("Hotel Reservation System", ["css/homepage", "css/booking", "css/customAlert"]); ?>

<body>
	<?php include_layout_template("layouts/customAlert.php") ?>
	<div class="container">
		<?php include_layout_template("layouts/navigation.php") ?>
		<?php createFront("Enjoy your Dream Vacation", "This is the best hotel reservation in the world.") ?>
		<?php include_layout_template("layouts/check.php") ?>

		<div class="hotels">
			<div class="title">Popular Hotels</div>
			<div class="all-hotel">
				<?php include_layout_template("layouts/allHotels.php") ?>
			</div>
		</div>
	</div>

	<?php include_layout_template("layouts/booking.php") ?>
</body>
<footer>
	<script type="text/javascript" src="main.js"></script>
	<script>
		const urlParams = new URLSearchParams(window.location.search);
		const successBook = urlParams.get('success-book');
		if (successBook === 'true')
			showAlert("Booked Successfully", "Your booking was successful!");

	</script>
</footer>
</html>
