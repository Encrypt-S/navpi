<?php
include ("header.php");
include ("pass.php");

try {
    $coin->walletpassphrase($_POST['password'],9999999,true);
    echo "<p class='bg-success'><b>Your Wallet is unlocked for staking.</b></p>";
    $newLockState = "Unlocked For Staking";
    changeLockState();
} catch(Exception $e) {
    echo "<p class='bg-danger'><b>Error: Something went wrong...  Perhaps you entered the wrong password, or your wallet is already unlocked.</b></p>";
}
		
?>
</div>
<?php include ("footer.php"); ?>