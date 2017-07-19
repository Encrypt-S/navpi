<?php
include ("header.php");
include ("pass.php");
$filename = time() . "_wallet.dat";
$destination = "/home/stakebox/UI/" . $filename;
$coin->backupwallet($destination);
exec("sudo chmod 775 " . $destination);
header("Location: http://" . $_SERVER['SERVER_NAME']."/" . $filename);
exit;
?>
