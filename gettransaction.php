<?php
include ("header.php");
include ("pass.php");
?>

<p><b>This is the complete information for the transaction with txid <?php print_r($_POST['txid']);?>.</b></p>
</div>
<div class="well"> 
<?php printarray($coin->gettransaction($_POST['txid'])); ?>
</div>
<?php include ("footer.php");?>