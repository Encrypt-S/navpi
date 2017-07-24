<?php
include ("header.php");
include ("pass.php");
$destination = $_POST['destination'];
?>

<?php
try {
	$coin->backupwallet($destination);
	echo "<p class='bg-success'><b>You have successfully backed your wallet up to $destination.</b></p> ";
} catch(Exception $e) {
	echo "<p class='bg-danger'><b>Error: Something went wrong...  Did you enter a location that does not exist, or is unreachable?</b></p>";
}
?>
</div>
<?php include ("footer.php");?>
