<?php
include ("header.php");
include ("pass.php");

$filename = time() . "_wallet.dat";
$destination2 = "/home/stakebox/UI/backup/" . $filename;
?>

<?php
try {
	$coin->backupwallet($destination2);

	header("Location: http://" . $_SERVER['SERVER_NAME']."/backup/" . $filename);

	echo "<p class='bg-success'><b>You have successfully backed up your wallet.</b></p> ";
} catch(Exception $e) {
	echo "<p class='bg-danger'><b>Error: Something went wrong...  Did you enter a location that does not exist, or is unreachable?</b></p>";
}
?>
</div>
<?php include ("footer.php");?>
