<?php
include ("header.php");
include ("pass.php");
$walletDir = "/home/stakebox/wallets/".$currentWallet;
?>

<div style="padding: 5px 30px 0px;">
    <div class="row">
        <div class="col-lg-2">
            <form action="update" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="webui">Update WebUI</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
    </div><!-- /.row -->
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
