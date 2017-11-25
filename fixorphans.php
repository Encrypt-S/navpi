<?php
include ("header.php");
include ("pass.php");
$walletDir = "/home/stakebox/wallets/".$currentWallet;

$status = $_POST["status"];

if ($status == "zapwallettxes") {
  exec("killall navcoind");
  exec("/usr/local/bin/navcoind -datadir=/home/stakebox/.navcoin4 -zapwallettxes > /dev/null &");
  print("<h2>Orphans are being fixed</h2>");
  print("<p>Be patient, it can take up to 15 minutes for your wallet to restart and repair.</p>");
} else { ?>
  <h2>Fix Orphan Stakes</h2>

  <p>If your balance is not displaying correctly it could be because some of your stakes have been orphaned.</p>
  <p>You can try to fix the orphaned stakes by clicking the button below. Be patient, it can take up to 15 minutes for your wallet to repair.</p>

  <form action="fixorphans" method="POST"><input type="hidden">
      <div class="input-group">
        <button class='btn btn-default' type="submit" name="status" value="zapwallettxes">Fix Orphans</button>
      </div><!-- /input-group -->
  </form>

  </div>
  </div>
<?php } ?>

<?php include ("footer.php"); ?>
