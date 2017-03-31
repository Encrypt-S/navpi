<?php
include ("header.php");
include ("pass.php");
?>

<p><b>
<?php 
	print_r('The new address for the account named "');
	print_r($_POST['account']);
	print_r('" is ');
	print_r($coin->getnewaddress($_POST['account']));	
?>
</b></p>
</div>
<?php include ("footer.php");?>