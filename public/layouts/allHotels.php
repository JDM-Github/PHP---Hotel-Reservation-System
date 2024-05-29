<?php

$database = new MySQLDatabase();

$sql = "SELECT img_url, name, description, location, hotel_id FROM Hotel";
$result = $database->query($sql);

if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		createHotel($row['img_url'], $row['name'], $row['description'], $row['location'], $row['hotel_id']);
	}
}
$database->close_connection();

?>
