<div class="background-feedback" id="background-feedback">
	<div class="custom-feedback" id="customFeedback">
		<div class="feedback-content">
			<h2 id="feedback-title">Thank your for staying!</h2>
			<div class="rate">
				<div class="star-container">
					<div class="star-background" onclick="fillStars(1)"><div class="fill"></div></div>
					<div class="star-background" onclick="fillStars(2)"><div class="fill"></div></div>
					<div class="star-background" onclick="fillStars(3)"><div class="fill"></div></div>
					<div class="star-background" onclick="fillStars(4)"><div class="fill"></div></div>
					<div class="star-background" onclick="fillStars(5)"><div class="fill"></div></div>
				</div>
			</div>
			<p id="alert-message">Give us a feedback.</p>
			<textarea id="feedback-textarea"></textarea>
			<button onclick="closeFeedback()" id="feedback-button">SUBMIT</button>
		</div>
	</div>
</div>
<script type="text/javascript">
function closeFeedback() {
	document.getElementById('background-feedback').style.display = 'none';
}
function fillStars(starNumber) {

	let starBackgrounds = document.querySelectorAll('.star-background');
	starBackgrounds.forEach(function(starBackground) {
		while (starBackground.firstChild) {
			starBackground.removeChild(starBackground.firstChild);
		}
	});
		
	for (let i = 0; i < starNumber; i++) {
		let fillDiv = document.createElement('div');
		fillDiv.classList.add('fill');
		starBackgrounds[i].appendChild(fillDiv);
	}
}
</script>