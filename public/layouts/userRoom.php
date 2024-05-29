<?php
$session = new Session();
$database = new MySQLDatabase();

$sql = "SELECT reservation_id, r.room_id, h.name, h.img_url, r.price, r.room_number, h.description
	FROM Rooms r
	INNER JOIN Reservations res ON r.room_id = res.room_id
	INNER JOIN Hotel h ON h.hotel_id = r.hotel_id
	WHERE res.user_id = ?";

$user_id = $session->get('user_id');
$result  = $database->prepexec($sql, $user_id);
$name    = $database->fetch("SELECT full_name FROM Users WHERE user_id = ?", $user_id);

?>

<div class="all-hotel-container">
	<div class="title">🔑 All "<?php echo $name; ?>" Room Booked</div>
	<div class="hotels">
		<div class="all-hotel">
			<?php
			while($row = $result->fetch_assoc())
			{
				createHotelBooked($row['img_url'], $row['name'], $row['price'], $row['description'], $row['room_number'], $row['reservation_id'], $row['room_id']);
			}
			$database->close_connection();
			?>
		</div>
	</div>
</div>
<div class="home"><a href="index.php">⌂</a></div>
