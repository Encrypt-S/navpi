<?php
include ("header.php");
include ("pass.php");
?>

<p><b>
<?php 
	print_r('The account associated with the address ');
	print_r($_POST['address']);
	print_r(' is "');
	print_r($coin->getaccount($_POST['address']));
	print_r('"');
?>
</b></p> 
</div>
<?php include ("footer.php");?>