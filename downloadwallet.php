<?php
include ("header.php");
include ("pass.php");

$filename = time() . "_wallet.dat";
$destination = "/home/pi/Desktop/backup/" . $filename;
?>

<?php
try {
	$coin->backupwallet($destination);
	echo "<p class='bg-success'><b>You have successfully backed up your wallet.</b></p> ";
  echo "<p><b>Please login to your Nav Pi to retrieve $filename from the back up folder on the desktop (/home/pi/Desktop/backup).</b></p>"
  echo "<p><b>When restoring your wallet, rename the file to wallet.dat</b></p>"
} catch(Exception $e) {
	echo "<p class='bg-danger'><b>Error: Something went wrong...  Did you enter a location that does not exist, or is unreachable?</b></p>";
}
?>
</div>
<?php include ("footer.php");?>
