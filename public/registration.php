<?php
require_once("../includes/initialize.php");
createHeader("Hotel Reservation System", ["css/homepage", "css/registration", "css/customAlert"]);
?>

<body>
	<?php include_layout_template("layouts/customAlert.php") ?>

	<div class="container">
		<?php createFront("🔑 HotelReserve", "This is the best hotel reservation in the world.") ?>
		<?php
		if (isset($_GET['on']) && $_GET['on'] === 'reg')
			include_layout_template("layouts/register.php");
		else
			include_layout_template("layouts/login.php");
		?>
	</div>

</body>
</html>
