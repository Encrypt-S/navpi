<?php
include ("header.php");
include ("pass.php");
?>

<div style="padding: 5px 30px 0px;">
    <div class="row">
        <div class="col-lg-2">
            <form action="power" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="reboot">Restart StakeBox</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
            <form action="power" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="shutdown">Shut Down StakeBox</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
    </div><!-- /.row -->
<?php
$status = $_POST["status"];

if ($status == "reboot"){
  if ($lockState != "Not Encrypted") {
    $currentWallet = NavCoin;
    $_SESSION['currentWallet'] = $currentWallet;
    $coinu = $wallets[$currentWallet];
    $coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
    $coin->walletlock();
    $newLockState = "Locked";
    changeLockState();
  }
    //exec("python /home/stakebox/UI/libs/reboot.py");
    exec("sudo reboot");
    print '<h2>Your StakeBox is restarting ...</h2>';
} else if ($status == "shutdown"){
  //exec("python /home/stakebox/UI/libs/shutdown.py");
  exec("sudo shutdown now");
  print '<h2>Your StakeBox is shutting down ...</h2>';
}
?>
</div>
</div>
<?php include ("footer.php"); ?>
