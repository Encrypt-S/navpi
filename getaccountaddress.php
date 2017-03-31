<?php
include ("header.php");
include ("pass.php");
?>

<p><b> 
<?php 
	print_r('The primary address for the account named "');
	print_r($_POST['account']);
	print_r('" is ');
	print_r($coin->getaccountaddress($_POST['account']));
	print_r(", there may be others. to see them use the get addresses by account function.");
?> 
</b></p>
</div>
<?php include ("footer.php");?>