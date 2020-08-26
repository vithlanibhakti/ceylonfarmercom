<?php 
$country = intval($_GET['country']);

include("config.php");
$query  = "SELECT id,statename FROM state WHERE countryid='$country'";
$result = mysqli_query($con, $query);
?>
<select name="state" onchange="getCity(<?php echo $country?>,this.value)">
	<option>Select State</option>
	<?php while ($row = mysqli_fetch_array($result)) { ?>
	<option value=<?php echo $row['id']?>><?php echo $row['statename']?></option>
	<?php } ?>
</select>
