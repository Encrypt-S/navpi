<?php
include ("header.php");
include ("pass.php");
$walletDir = "/home/stakebox/wallets/".$currentWallet;
$dataDir = "/home/stakebox/.Hyper";
?>

<div style="padding: 5px 30px 0px;">
    <div class="row">
        <div class="col-lg-2">
            <form action="startstop" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="stop">Stop The Wallet</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
            <form action="startstop" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="start">Start The Wallet</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
            <form action="startstop" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="rescan">Start The Wallet With -rescan Option</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
    </div><!-- /.row -->
<?php  
$status = $_POST["status"];  
  
if ($status == "stop"){
 
    $coin->stop(); 
    print '<h2>You have stopped the wallet, please allow it a minute or so to fully stop before restarting.</h2>';
 
}  
if ($status == "start"){ 
    chdir($walletDir);
    echo getcwd() . "\n";
    echo "$currentWallet"." -datadir="."$dataDir";
    shell_exec("$currentWallet"." -datadir="."$dataDir"); 
    print '<h2>The wallet is starting, it could take several minutes before it is available.</h2>';

} 
if ($status == "rescan"){ 
   
    chdir($walletDir);
    exec($currentWallet -rescan); 
    print '<h2>The wallet is starting with the rescan option, it may take a while before it becomes available again.</h2>';

} 
?>
</div>
</div>
<?php include ("footer.php"); ?>