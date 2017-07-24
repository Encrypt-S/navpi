<?php
include ("header.php");
include ("pass.php");
$filename = "wallet.dat";
$destination = "/home/pi/Desktop/" . $filename;
?>

<?php
try {
	$coin->backupwallet($destination);
	echo "<p class='bg-success'><b>You have successfully backed your wallet up to the desktop. Please login to your Nav Pi to retrieve the backup.</b></p> ";
} catch(Exception $e) {
	echo "<p class='bg-danger'><b>Error: Something went wrong...  Did you enter a location that does not exist, or is unreachable?</b></p>";
}
?>
</div>
<?php include ("footer.php");?>
