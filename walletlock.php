<?php
include ("header.php");
include ("pass.php");
   $coin->walletlock();
   $newLockState = "Locked";
   changeLockState();
?>
<div class="well">
<p><b>Your wallet is now locked, You WILL NOT stake while locked.</b><p/>
</div>
<?php include ("footer.php"); ?>