<?php
include ("header.php");
include ("pass.php");
?>

<b>
<?php 
	print_r('The network is currently on block number ');
	print_r($coin->getblockcount());
	print_r('.');
?>
</b> 
</div>
<?php include ("footer.php");?>