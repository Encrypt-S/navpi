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
$updated = $_GET["updated"];

if ($updated == "true"){
    exec("echo /dev/null > /home/stakebox/UI/update.json");
    print '<h2>Restarting your device to complete update.</h2>';
    exec("sudo shutdown -r now");
} else {
    exec("echo /dev/nul > /home/stakebox/UI/update.json");
    print '<h2>Restarting your device to clear update error.</h2>';
    exec("sudo shutdown -r now");
}

?>
</div>
</div>
<?php include ("footer.php"); ?>
