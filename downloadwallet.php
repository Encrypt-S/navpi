<?php
include ("header.php");
include ("pass.php");
$destination = "/var/www/html/webui/WebUI/".$currentWallet."wallet.dat";
$coin->backupwallet($destination);
exec("sudo chmod g+r /var/www/html/webui/WebUI/".$currentWallet."wallet.dat");
header("Location: http://".$_SERVER['SERVER_NAME']."/".$currentWallet."wallet.dat");
exit;
?>

