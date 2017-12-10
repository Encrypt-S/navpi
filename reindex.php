<?php
include ("header.php");
include ("pass.php");
$walletDir = "/home/stakebox/wallets/".$currentWallet;

$status = $_POST["status"];

if ($status == "reindex") {
  exec("killall navcoind");
  exec("/usr/local/bin/navcoind -datadir=/home/stakebox/.navcoin4 -reindex > /dev/null &");
  print("<h2>Reindexing the blockchain</h2>");
  print("<p>Be patient, it can take a few minutes for your wallet to reindex the blockchain.</p>");
} else { ?>
  <h2>Reindex the blockchain</h2>

  <p>If you've updated recently, you will also need to reindex the blockchain.</p>
  <p>You can reindex the blockchain by clicking the button below. Be patient, it can take a few minutes for your wallet to reindex.</p>

  <form action="reindex" method="POST"><input type="hidden">
      <div class="input-group">
        <button class='btn btn-default' type="submit" name="status" value="reindex">Reindex</button>
      </div><!-- /input-group -->
  </form>

  </div>
  </div>
<?php } ?>

<?php include ("footer.php"); ?>
