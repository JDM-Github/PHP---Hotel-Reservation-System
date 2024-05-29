
let changeChecker = false;

function openBooking(image, name, description, location, optionStr)
{
	if (optionStr === "")
	{
		showAlert("There is no room", "The hotel can't be open as there is no room.");
		return;
	}
	const button   = document.querySelector('.book-container .booking .book');
	const select   = document.querySelector('.book-container .booking .rate-price .name-price .available-room');
	const price    = document.querySelector('.book-container .booking .rate-price .name-price .price');
	const room     = document.getElementById('booking-book-room');
	const checkIn  = document.getElementById('booking-check-in');
	const checkOut = document.getElementById('booking-check-out');

	checkIn.value  = dateInInput.value;
	checkOut.value = dateOutInput.value;

	select.innerHTML = optionStr;
	if (!changeChecker)
	{
		select.addEventListener('change', function() {
			const selectData = JSON.parse(this.value);
			price.textContent = `PHP ${selectData.price}`;
			room.value = selectData.room_id;
		});
		changeChecker = true;
	}
	const selectData = JSON.parse(select.value);

	document.querySelector('.book-container .booking .image').style.background = `url(${image}) center/100% 100%`;
	document.querySelector('.book-container .booking .rate-price .name-price .name').textContent = name;
	document.querySelector('.book-container .booking .description').textContent = description;
	document.querySelector('.book-container .booking .rate-price .name-price .location > i').textContent = `Location: ${location}`;

	const checkIfEmpty = Object.keys(selectData).length === 0;
	price.textContent = `PHP ${(checkIfEmpty) ? "0.00" : selectData.price}`;
	room.value = (checkIfEmpty) ? 0 : selectData.room_id;

	document.querySelector('.book-container .booking .book').disabled = optionStr === "";
	document.querySelector('.book-container').style.display = "inline-block";
}
