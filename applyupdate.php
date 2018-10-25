<?php
include ("header.php");
include ("pass.php");
$walletDir = "/home/stakebox/wallets/".$currentWallet;

$updated = $_GET["updated"];

exec("truncate -s 0 /home/stakebox/UI/update.json");
print '<h2>Clearing update message and restarting device.</h2>';
exec("sudo reboot");

?>
</div>
</div>
<?php include ("footer.php"); ?>
