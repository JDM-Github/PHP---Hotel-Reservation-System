<div class="check">
	<div class="nav">
		<div class="location">
			<div class="title">Location</div>
			<div class="para">Where are you going?</div>
		</div>
		<style type="text/css">
			#selectedInDate, #selectedOutDate {
				margin-left: 20px; margin-top: 10px; color: #cccccccc;
				cursor: default;
			}
		</style>
		<div class="checkIn">
			<div class="title">Check in</div>

			<div class="para inPara" for="dateInInput">Add dates</div>
			<input type="date" id="dateInInput" <?php echo 'min="' . date('Y-m-d') . '"'; ?> style="display: none">
			<div id="selectedInDate">NOT SET</div>

		</div>
		<div class="checkOut">
			<div class="title">Check out</div>
			<div class="para outPara" for="dateOutInput">Add dates</div>
			<input type="date" id="dateOutInput" style="display: none">
			<div id="selectedOutDate">NOT SET</div>

		</div>
	</div>
	<div class="search center">
		<div class="button center">🔍</div>
	</div>
</div>
<script>

const dateInInput = document.getElementById('dateInInput');
const dateOutInput = document.getElementById('dateOutInput');

document.querySelector('.inPara').addEventListener('click', function() {
	dateInInput.showPicker();
});
document.querySelector('.outPara').addEventListener('click', function() {
	if (dateInInput.value) dateOutInput.showPicker();
});

dateInInput.addEventListener('change', function() {
	var checkInDate = new Date(this.value);
	var nextDay     = new Date(checkInDate);
	nextDay.setDate(checkInDate.getDate() + 1);
	var minCheckOutDate = nextDay.toISOString().split('T')[0];
	dateOutInput.setAttribute('min', minCheckOutDate);

	var selectedDate = this.value;
	if (selectedDate)
		document.getElementById('selectedInDate').innerText = selectedDate;
	else
		document.getElementById('selectedInDate').innerText = 'NOT SET';
});
dateOutInput.addEventListener('change', function() {
	var selectedDate = this.value;
	if (selectedDate)
		document.getElementById('selectedOutDate').innerText = selectedDate;
	else
		document.getElementById('selectedOutDate').innerText = 'NOT SET';
});
</script>
