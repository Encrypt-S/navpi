<?php
include ("header.php");
include ("pass.php");
?>

<p><b>
<?php 
	print_r('The total recieved by the address ');
	print_r($_POST['address']);
	print_r(' is ');
	print_r($coin->getreceivedbyaddress($_POST['address']));
	print_r(' coins.');
?>
</b></p> 
</div>
<?php include ("footer.php");?>