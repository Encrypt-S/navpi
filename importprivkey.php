<?php
include ("header.php");
include ("pass.php");
$key = $_POST['key'];
$label = $_POST['label'];
?>

<pre>
<?php
 	try {
		$coin->importprivkey($key, $label);
		echo "<p class='bg-success'><b>You have successfully imported your private key.</b></p>";
	} catch(Exception $e) {
		echo "<p class='bg-danger'><b>Error: Something went wrong...  Perhaps you entered your key incorrectly.</b></p>";
	}		
?>
</div>
</pre>
<?php include ("footer.php");?>