<?php
include ("header.php");
include ("pass.php");
$walletDir = "/home/stakebox/wallets/".$currentWallet;
?>

<div style="padding: 5px 30px 0px;">
    <div class="row">
        <div class="col-lg-12">
            <b>Nav Pi User Interface</b><br />
            <form action="update" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="webui">Update WebUI</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
    </div><!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
          <b>Nav Coin Core</b><br />
           This device should automatically check for new versions of the Nav Coin Core wallet and update from github. If you want to run the updater manually, please run the following in the navpi terminal window.
           <pre>
             sudo /home/stakebox/UI/libs/updater.sh
           </pre>
        </div>
    </div>
<?php
$status = $_POST["status"];

if ($status == "webui"){

    echo exec("cd /home/stakebox/UI && /usr/bin/git pull 2>&1");
    print '<h2>You have updated the UI</h2>';

}
?>
</div>
</div>
<?php include ("footer.php"); ?>
