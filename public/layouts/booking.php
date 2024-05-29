<div class="book-container">
	<div class="background" onclick="document.querySelector('.book-container').style.display = 'none';"></div>
	<form class="booking" action="./redirect.php" method="POST">
		<div class="image"></div>
		<div class="rate-price">
			<div class="name-price">
				<div class="name"></div>
				<div class="price"></div>
			</div>
			<div class="name-price">
				<div class="location"><i></i></div>
				<select class="available-room" value=""></select>
			</div>
			<div class="description"></div>

			<div class="rate">
				<div class="star-container">
					<div class="star-background"><div class="fill"></div></div>
					<div class="star-background"><div class="fill"></div></div>
					<div class="star-background"><div class="fill"></div></div>
					<div class="star-background"><div class="fill"></div></div>
					<div class="star-background"></div>
				</div>
			</div>
		</div>
		<input type="hidden" id="booking-check-in" name="check_in">
		<input type="hidden" id="booking-check-out" name="check_out">
		<input type="hidden" id="booking-book-room" name="room_id">
		<input type="hidden" name="type" value="book-room">
		<button class="book">Book Now</button>
	</form>
</div>
<script type="text/javascript">
document.querySelector('.book-container .booking .book').addEventListener('click', function(event) {
	if (!dateOutInput.value) {
		showAlert("Booking Error", 'Please select a Check-Out date.');
		event.preventDefault();
	}
});
</script>
