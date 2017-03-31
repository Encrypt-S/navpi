<?php
include ("header.php");
include ("pass.php");
$address = $_POST['address'];
?>

<p><b>
<?php
 	try {
		$key = $coin->dumpprivkey($address);
		echo "<p class='bg-success'><b>The private key for the address $address is $key.</b></p>";
	} catch(Exception $e) {
		echo "<p class='bg-danger'><b>Error:</b> Something went wrong...  Perhaps you entered the address incorrectly, or your wallet is locked.</p>";
	}		
?>
</b></p>
</div>
<?php include ("footer.php");?>