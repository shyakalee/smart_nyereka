<?php
	if (isset($_POST["submit_address"]))
	{
		$address = $_POST["address"];
		$address = str_replace(" ", "+", $address);
		?>

		<iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>

		<?php
	}

	if (isset($_POST["submit_coordinates"]))
	{
		$latitude = $_POST["latitude"];
		$longitude = $_POST["longitude"];
		?>

		<iframe id="map1" width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>

		<?php
	}
?>

<form method="POST">
	<p>
		<input type="text" name="address" placeholder="Enter address">
	</p>

	<input type="submit" name="submit_address">
</form>

<form method="POST">
	<p>
		<input type="text" name="latitude" placeholder="Enter latitude">
	</p>

	<p>
		<input type="text" name="longitude" placeholder="Enter longitude">
	</p>

	<input type="submit" name="submit_coordinates">
</form>

<script>
	let map;
	function initMap() {
		map= new google.maps.Map(document.getElementById("map1"),{
			zoom: 8,
			mapTypeId: "satellite"
		});

		new google.maps.Marker({
			map:map,
			label:"A",
			animation: google.maps.Animation.DROP,
		})
	}
</script>