<?php
include ("header.php");
include ("pass.php");
?>

<b>
<?php 
	print_r('You are currently connected to ');
	print_r($coin->getconnectioncount());
	print_r(' peers.');
?>
</b>
</div>
<?php include ("footer.php");?>