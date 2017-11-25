<?php
include ("header.php");
include ("pass.php");
$walletDir = "/home/stakebox/wallets/".$currentWallet;

$updated = $_GET["updated"];

exec("killall navcoind");
print '<h2>Restarting the navcoin daemon and flushing out txes. This can take up to 15 minutes.</h2>';
exec("./usr/local/bin/navcoind -datadir=/home/stakebox/.navcoin4 -zapwallettxes");

?>
</div>
</div>
<?php include ("footer.php"); ?>
