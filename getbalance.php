<?php
include ("header.php");
include ("pass.php");
?>

<b>
<?php 
	print_r('The total balance of all accounts is ');
	print_r($coin->getbalance("*", 0));
	print_r(' coins.');
?>
</b> 
</div>
<?php include ("footer.php");?>